@extends('admin.layouts.document')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.drivers.create') }}" class="btn btn-app">
                  <i class="fas fa-edit"></i>Create
                </a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Second Name</th>
                            <th>Date</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($drivers as $driver)
                            <tr>
                                <td>{{ ($driver->id ?? '') }}</td>
                                <td>{{ ($driver->first_name ?? '') }}</td>
                                <td>{{ ($driver->last_name ?? '') }}</td>
                                <td>{{ ($driver->date ?? '') }}</td>
                                <td>{{ ($driver->created_at ?? '') }}</td>
                                <td>{{ ($driver->updated_at ?? '') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href='{{ route('admin.drivers.edit', $driver) }}' type="button" class="btn btn-info">Edit</a>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a onclick="event.preventDefault()" class="dropdown-item delete" href="{{ route('admin.drivers.destroy', $driver) }}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection