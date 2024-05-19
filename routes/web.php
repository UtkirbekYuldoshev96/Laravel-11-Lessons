<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('test', function () {
//     return view('test');
// });

// Qisqaroq yozilgan kod
Route::view('test', 'test');

Route::get('/users/{id?}', function($user_id = null) {
    return "Siz tanlagan user id bu: ". $user_id;
})->name('user');

Route::prefix('admin')->group(function () {
    Route::get('/users', function(){
        return "Admin users";
    });
});

// Route ikkita page bir ikkinchisga ulash
Route::get('bir', function(){
    return 'birinchi';
});
Route::get('ikki', function() {
    return "ikkinchi";
});
Route::redirect('bir', 'ikki');