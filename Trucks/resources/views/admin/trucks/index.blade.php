@extends('admin.layouts.document')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.trucks.create') }}" class="btn btn-app">
                  <i class="fas fa-edit"></i>Create
                </a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Make</th>
                            <th>Model</th>
                            <th>Countries</th>
                            <th>Years</th>
                            <th>Fuel</th>
                            <th>Run</th>
                            <th>Price</th>
                            <th>Type</th>
                            <th>Standart</th>
                            <th>Drivers</th>
                            <th>Description</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($trucks as $truck)
                            <tr>
                                <td>{{ ($truck->id ?? '') }}</td>
                                <td>
                                    <img width="100px"; height="100px" src="{{ asset('storage/images/'.($truck->image ?? 'noimage.jpg'))}}">
                                </td>
                                <td>{{ ($truck->make ?? '') }}</td>
                                <td>{{ ($truck->model ?? '') }}</td>
                                <td>{{ ($truck->countries ?? '') }}</td>
                                <td>{{ ($truck->years ?? '') }}</td>
                                <td>{{ ($truck->fuel ?? '') }}</td>
                                <td>{{ ($truck->run ?? '') }}</td>
                                <td>{{ ($truck->price ?? '') }}</td>
                                <td>{{ ($truck->type ?? '') }}</td>
                                <td>{{ ($truck->standart ?? '') }}</td>
                                <td>
                                    @foreach($truck->drivers as $driver)
                                    <a href="{{route('admin.drivers.edit', $driver)}}">
                                        {{$driver->fullName ?? ''}}
                                    @endforeach
                                </td>
                                <td>{{ ($truck->description ?? '') }}</td>
                                <td>{{ ($truck->created_at ?? '') }}</td>
                                <td>{{ ($truck->updated_at ?? '') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href='{{ route('admin.trucks.edit', $truck) }}' type="button" class="btn btn-info">Edit</a>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a onclick="event.preventDefault()" class="dropdown-item delete" href="{{ route('admin.trucks.destroy', $truck) }}">Delete</a>
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