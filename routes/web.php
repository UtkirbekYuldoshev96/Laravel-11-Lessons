<?php

use App\Http\Controllers\UserControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserControllers::class, 'index']); // actions
Route::get('/users/createUser', [UserControllers::class, 'createUser']);
Route::get('/users/{user}', [UserControllers::class, 'show']);

