<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/registro', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/registro', [RegisterController::class, 'register']);

Route::get('/policies-data', function () {
    return view('policies-data.index');
})->name('policies-data.index');
