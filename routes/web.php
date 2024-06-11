<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserControllers;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'main']);
Route::get('/welcome', [PageController::class, 'welcome']);


// Route::get('/users', [UserControllers::class, 'index']); // actions
// Route::get('/users/createUser', [UserControllers::class, 'createUser']);
// Route::get('/users/{user}', [UserControllers::class, 'show']);
// Route::get('/users/{user}/edit', [UserControllers::class, 'edit']);
// Route::post('/user-create', [UserControllers::class, 'store']);
