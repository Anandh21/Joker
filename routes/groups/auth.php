<?php


use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerPost'])->name('registerPost');

//authenticate

Route::get('/auth', [AuthController::class, 'authenticateGet'])->name('authenticateGet');
Route::post('/auth', [AuthController::class, 'authenticate'])->name('authenticate');