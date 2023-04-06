<?php

namespace App\Models;

use App\Models\Truck;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Driver extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'date'
    ];

    public function trucks(): BelongsToMany
    {
        return $this->belongsToMany(Truck::class);
    }

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) =>  $attributes['first_name'] . ' ' . $attributes['last_name'],
        );
    }
}
