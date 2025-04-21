<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;

<<<<<<< HEAD
Route::get('/', function () {
    return view('home');
});

=======
Route::get('/', [PostController::class, 'index']);
>>>>>>> 26e4a0607da03f91d78c82d181ec7e630c083c86
Route::resource('posts', PostController::class);

Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister');
Route::post('/register', [AuthController::class, 'register'])->name(name: 'registration.post');


Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [AuthController::class, 'login'])->name(name: 'login.post');


Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
