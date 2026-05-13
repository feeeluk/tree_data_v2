<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::post('/login', [LoginController::class, 'login'])->name('login');
