<?php

namespace App\Models;

use App\Models\Driver;
use App\Models\TruckImage;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Truck extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'make',
        'model',
        'years',
        'fuel',
        'price',
        'run',
        'type',
        'standart',
        'countries',
        'image',
        'description',
    ];

    public $with = ['drivers'];

    /**
     * @return BelongsToMany
     */
    public function drivers(): hasMany
    {
        return $this->hasMany(Driver::class);
    }

    /**
     * @return BelongsToMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(TruckImage::class);
    }

    public static function customCreate(Request $request): self
    {
        return DB::transaction(function () use ($request) {
        $image = $request->file('image');
        $inputs = $request->input();
        $inputs['image'] = $image?->getClientOriginalName() ?? 'noimage.jpg';
        $truck = self::create($inputs);
        $truck->syncAll($request);
        // dd($inputs);
        //Upload and insert multiple images 
        if ($images = $request->file('images')) {
            $images = $truck->uploadImages($images);
            $truck->insertImages($images);
        }

        //Upload cover image 
        if ($image = $request->file('image')) {
            $images = $truck->uploadImages([$image]);
        }

        return $truck;
    });
}

public function customUpdate(Request $request): self
{
    DB::transaction(function () use ($request) {
        //Old Image
        $oldImages = $request->input('old_images') ?? [];
        //Detach Old Images
        TruckImage::where('truck_id', $this->id)->whereNotIn('name', $oldImages)->forceDelete();

        //Upload and insert multiple images
        if ($images = $request->file('images')) {
            // dd($images);
            $images = $this->uploadImages($images);
            $this->insertImages($images);
        }

        //Upload cover image 
        $inputs = $request->input();

        if ($image = $request->file('image')) {
            $images = $this->uploadImages([$image]);
        }
    
        $inputs['image'] = $request->file('image')?->getClientOriginalName() ?? $request->get('old_cover_image') ?? 'noimage.jpg';

        $this->syncAll($request)->fill($inputs)->save();
    });

    return $this;
}

public function insertImages($images): self
    { 
        collect($images)->each(function (string $item, int $key) {
            TruckImage::updateOrCreate([
                'name' => $item,
                'truck_id' => $this->id
            ]);
        });
        
        return $this;
}

public function assignDriver($driverids=[])
{
    Driver::where("truck_id", $this->id)->update(['truck_id' => null]);
    Driver::whereIn("id", $driverids)->update(['truck_id' => $this->id]);
    return $this;
    // dd("Posts updated successfully.");
}

    public function syncAll($request): self
    {
        if($request->input('drivers')){
            $this->assignDriver($request->input('drivers'));
        }
        return $this;
    }

    public function uploadImages(array $images): array
    {
        $paths = [];
        foreach ($images as $image) {

            if (!$image instanceof UploadedFile) {
                throw new \Exception('Instance of Illuminate\Http\UploadedFile file expected');
            }

            $imageName = $image->getClientOriginalName();
            $paths[] = $imageName;

            if (Storage::exists("public/images/$imageName")) {
               continue;
            }

            $image->storeAs(
                'public/images',
                $image->getClientOriginalName()
            );

        }

        return $paths;
    }

}
