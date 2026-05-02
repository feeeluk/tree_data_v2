<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', fn() => 'Laravel is working');

Route::get('/controller-test', [\App\Http\Controllers\TestController::class, 'index']);

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/about', fn() => view('pages.about'));
