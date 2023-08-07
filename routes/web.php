<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login', function(){
    return view('login');
});
Auth::routes();

Route::post('/login', [App\Http\Controllers\Auth\AuthController::class, 'login']);

Route::get('/teste', [App\Http\Controllers\TesteController::class, 'index'])->middleware('jwt.auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
