<?php

use Illuminate\Support\Facades\Route;




Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', \App\Http\Controllers\PostController::class . '@index')->name('post.index');
