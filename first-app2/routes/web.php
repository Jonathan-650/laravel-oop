<?php

use Illuminate\Support\Facades\Route;

// Controller

// Call the controller
use App\Http\Controllers\HomepageController;

Route::prefix('/')->group(function () {
    //no more animal

    // Define the endpoint
    Route::get('/homepage', [HomepageController::class, 'index']);
});