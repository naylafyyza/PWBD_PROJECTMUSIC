<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/mo0d', function () {
    return view('mo0d');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/konser', function () {
    return view('konser');
});

Route::get('/swag', function () {
    return view('swag');
});

Route::get('/cry', function () {
    return view('cry');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/playlisst', function () {
    return view('components.playlist');
});

