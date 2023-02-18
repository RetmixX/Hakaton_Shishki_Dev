<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function (){
   Route::get('hello', \App\Http\Controllers\Test\TestController::class);
});


