<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('hello', \App\Http\Controllers\Test\TestController::class);

    Route::get('doc/employee', \App\Http\Controllers\Document\DocumentEmployeeController::class);
    Route::get('doc/supervisor', \App\Http\Controllers\Document\DocumentSupervisorController::class);

    Route::apiResource('employee', \App\Http\Controllers\Employee\EmployeeController::class);
    Route::apiResource('hr', \App\Http\Controllers\HR\HRController::class);
    Route::apiResource('documents', \App\Http\Controllers\Document\DocumentController::class);


    Route::get('roadmap', \App\Http\Controllers\Employee\RoadmapController::class)
        ->middleware('role:Employee');
});
