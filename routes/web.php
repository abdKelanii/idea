<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionContorller;

Route::redirect('/','/ideas');

Route::get('/ideas', [IdeaController::class, 'index'])->middleware('auth');

Route::get('/register', [RegisterUserController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterUserController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionContorller::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [SessionContorller::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionContorller::class, 'destroy'])->middleware('auth');
