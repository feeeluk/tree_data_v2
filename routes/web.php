<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/test', fn() => view('pages.test'));

// Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/login', [LoginController::class, 'showLoginForm']);

