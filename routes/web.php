<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::resource('permissions', App\Http\Controllers\PermissionController::class);

