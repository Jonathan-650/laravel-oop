<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClassCleaningDutyController;

Route::prefix('/v1/class_cleaning_duty')->group(function () {
    Route::get('/', [ClassCleaningDutyController::class, 'getAllClassCleaningDuty']);
    Route::post('/', [ClassCleaningDutyController::class, 'createClassCleaningDuty']);
    Route::delete('/{id}' , [ClassCleaningDutyController::class, 'deleteClassCleaningDuty']);
    Route::put('/{id}' , [ClassCleaningDutyController::class, 'updateClassCleaningDuty']);
});