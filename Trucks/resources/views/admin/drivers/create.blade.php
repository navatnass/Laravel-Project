@extends('admin.layouts.document')
@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add</h3>
    </div>

    <form action="{{ route('admin.drivers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
            </div>

            <div class="form-group">
                <label for="second_name">Second Name</label>
                <input type="text" class="form-control" name="second_name" id="second_name" placeholder="Second Name">
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" class="form-control" name="date" id="date" placeholder="Date">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection