<?php

namespace App\Http\Controllers\Front;

use App\Models\Truck;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrucksController extends Controller
{
    public function index()
    {
        $trucks = Truck::get();
        return view('front.trucks.index', compact('trucks'));
    }

    public function show(Truck $truck)
    {
        return view('front.trucks.show', compact('truck'));
    }
}
