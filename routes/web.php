<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('cars.index');
});

Route::resource('cars', CarController::class);
Route::resource('countries', CountryController::class);
