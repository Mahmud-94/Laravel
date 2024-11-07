<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('/students', StudentController::class);
});


Route::get('/admin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

require __DIR__.'/auth.php';
