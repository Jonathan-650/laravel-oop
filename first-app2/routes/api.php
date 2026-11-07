<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClassCleaningDutyController;
use App\Http\Controllers\EventController;

Route::prefix('/v1/class_cleaning_duty')->group(function () {
    Route::get('/', [ClassCleaningDutyController::class, 'getAllClassCleaningDuty']);
    Route::post('/', [ClassCleaningDutyController::class, 'createClassCleaningDuty']);
    Route::delete('/{id}' , [ClassCleaningDutyController::class, 'deleteClassCleaningDuty']);
    Route::put('/{id}' , [ClassCleaningDutyController::class, 'updateClassCleaningDuty']);
});

Route::prefix('/v1/event')->group(function () {
    Route::get('/', [EventController::class, 'getAllEvent']);
    Route::post('/', [EventController::class, 'createEvent']);
    Route::delete('/{id}' , [EventController::class, 'deleteEvent']);
    Route::put('/{id}' , [EventController::class, 'updateEvent']);
});