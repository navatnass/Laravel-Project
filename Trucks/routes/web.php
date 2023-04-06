<?php

use App\Http\Middleware\SetLanguage;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TruckController;
use App\Http\Controllers\Front\HomesController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Front\TrucksController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Admin

Route::prefix('/admin')->name('admin.')->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('trucks', TruckController::class);
    Route::resource('drivers', DriverController::class);
});

// Main

Route::name('front.')->group(function() {
    Route::get('/', [HomesController::class, 'index'])->name('home');
    Route::resource('trucks', TrucksController::class)->only(['index','show']);
});

// Lang

Route::get('/lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});