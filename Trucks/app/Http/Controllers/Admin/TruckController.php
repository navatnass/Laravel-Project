<?php

namespace App\Http\Controllers\Admin;

use App\Models\Truck;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTruckRequest;
use App\Http\Requests\UpdateTruckRequest;

class TruckController extends Controller
{
    public function index()
    {
        // App::setLocale('lt');
        $trucks = Truck::get();
        return view('admin.trucks.index', compact('trucks'));
    }

        public function create()
    {
        return view('admin.trucks.create');
    }

    public function store(StoreTruckRequest $request)
    {
        Truck::customCreate($request);
        return to_route('admin.trucks.index');
    }

    public function edit(Truck $truck)
    {   
        $drivers = Driver::get();
        return view('admin.trucks.edit', compact('truck', 'drivers'));
    }

    public function update(UpdateTruckRequest $request, Truck $truck)
    {  
        $truck->customUpdate($request);
        return to_route('admin.trucks.index');
    }

    public function destroy(Truck $truck)
    {
        $truck->delete();
        return response()->json(['Successfully Deleted'=>true]);
    }

    public function show(Truck $truck)
    {
        //
    }
}
