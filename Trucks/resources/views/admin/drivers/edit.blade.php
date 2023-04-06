@extends('admin.layouts.document')
@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit<br><b><?= ($driver->first_name ?? ''); ?></b> <b><?= ($driver->last_name ?? ''); ?></b></b><br>[<b><?= ($driver->id ?? ''); ?><b>] </h3>
    </div>

    <form action="{{ route('admin.trucks.update', $driver) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="id" value="<?= ($driver->id ?? ''); ?>">
        <div class="card-body">

            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" value="<?= ($driver->first_name ?? ''); ?>" id="first_name" placeholder="First Name">
            </div>

            <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text" class="form-control" name="last_name" value="<?= ($driver->last_name ?? ''); ?>" id="last_name" placeholder="Last_name">
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date" value="<?= ($driver->date ?? ''); ?>" id="date" placeholder="Date">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection