<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('user/edit', [UserController::class, 'edit']);
Route::put('user/edit', [UserController::class, 'update']);

Route::resource('post', PostController::class);
