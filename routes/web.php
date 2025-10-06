<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('user/edit', [UserController::class, 'edit']);
Route::put('user/edit', [UserController::class, 'update']);

// Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
// Route::put('user/{id}', [UserController::class, 'update'])->name('user.update');
