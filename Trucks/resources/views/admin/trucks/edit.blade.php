@extends('admin.layouts.document')
@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit<br><b><?= ($truck->make ?? ''); ?></b> <b><?= ($truck->model ?? ''); ?></b></b><br>[<b><?= ($truck->id ?? ''); ?><b>] </h3>
    </div>

    <form action="{{ route('admin.trucks.update', $truck) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="id" value="<?= ($truck->id ?? ''); ?>">
        <div class="card-body">

            <div class="form-group">
                <label for="make">Make</label>
                <input type="text" class="form-control" name="make" value="<?= ($truck->make ?? ''); ?>" id="make" placeholder="Make">
            </div>

            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" class="form-control" name="model" value="<?= ($truck->model ?? ''); ?>" id="model" placeholder="Model">
            </div>

            <div class="form-group">
                <label for="run">Run</label>
                <input type="number" class="form-control" name="run" value="<?= ($truck->run ?? ''); ?>" id="run" placeholder="Run">
            </div>

            <div class="form-group">
                <label for="fuel">Fuel</label>
                <input type="text" class="form-control" name="fuel" value="<?= ($truck->fuel ?? ''); ?>" id="fuel" placeholder="Fuel">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" value="<?= ($truck->price ?? ''); ?>" id="price" placeholder="Price">
            </div>

            <div class="form-group">
                <label for="years">Years</label>
                <input type="date" class="form-control" name="years" value="<?= ($truck->years ?? ''); ?>" id="years" placeholder="Years">
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" name="type" value="<?= ($truck->type ?? ''); ?>" id="type" placeholder="Type">
            </div>

            <div class="form-group">
                <label for="standart">Standart</label>
                <input type="text" class="form-control" name="standart" value="<?= ($truck->standart ?? ''); ?>" id="standart" placeholder="Standart">
            </div>

            <div class="form-group">
                <label for="countries">Countries</label>
                <input type="text" class="form-control" name="countries" value="<?= ($truck->countries ?? ''); ?>" id="countries" placeholder="Countries">
            </div>
            
            <x-forms.multi-relation-select :tagname="'Drivers'" :model="$truck" :optionName="'fullName'" :relationItems="$drivers"/>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" value="<?= ($truck->description ?? ''); ?>" id="description" placeholder="Description">
            </div>


            <div class="form-group">
                <x-forms.image-input :images="[$truck->image]" :label="'Cover Image'" :inputName="'image'" :oldInputName="'old_cover_image'"/>
            </div>

            <div class="form-group">
                <x-forms.image-input :label="'Gallery'" :images="$truck->images" :inputName="'images[]'" :oldInputName="'old_images[]'"/>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection