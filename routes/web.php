<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


<<<<<<< HEAD
Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('home')->middleware('auth');
=======
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
>>>>>>> 6a41a5654a6270d5fd94c1563e2a4d902dbe28bc
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Auth::routes();
