<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response('Not found', 404);
});
