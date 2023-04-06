@extends('admin.layouts.document')
@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add</h3>
    </div>

    <form action="{{ route('admin.trucks.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label for="make">Make</label>
                <input type="text" class="form-control" name="make" id="make" placeholder="Make">
            </div>

            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" class="form-control" name="model" id="model" placeholder="Model">
            </div>

            <div class="form-group">
                <label for="fuel">Fuel</label>
                <input type="text" class="form-control" name="fuel" id="fuel" placeholder="Fuel">
            </div>

            <div class="form-group">
                <label for="run">Run</label>
                <input type="number" class="form-control" name="run" id="run" placeholder="Run">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Price">
            </div>

            <div class="form-group">
                <label for="years">Years</label>
                <input type="date" class="form-control" name="years" id="years" placeholder="Years">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Description">
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Type">
            </div>

            <div class="form-group">
                <label for="standart">Standart</label>
                <input type="text" class="form-control" name="standart" id="standart" placeholder="Standart">
            </div>

            <div class="form-group">
                <label for="countries">Countries</label>
                <input type="text" class="form-control" name="countries" id="countries" placeholder="Countries">
            </div>

            <div class="form-group">
                <label for="cover-image">Image</label>
                <input type="file" class="form-control" name="image" id="cover-image" placeholder="Image">
            </div>

            <div class="form-group">
                <x-forms.image-input :label="'Cover Image'" :inputName="'image'" :oldInputName="'old_cover_image'"/>
            </div>

            <div class="form-group">
                <x-forms.image-input :label="'Gallery'" :inputName="'images[]'" :oldInputName="'old_images[]'"/>
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