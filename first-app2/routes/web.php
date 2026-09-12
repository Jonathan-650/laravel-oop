<?php

use Illuminate\Support\Facades\Route;

// Controller

// Call the controller
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AnimalInfoController;

Route::prefix('/')->group(function () {
    //no more animal

    // Define the endpoint
    Route::get('/homepage', [HomepageController::class, 'index']);
    Route::get('/animal_info', [AnimalInfoController::class, 'index']);
});