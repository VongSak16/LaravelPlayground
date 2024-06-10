<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\HotelsController;
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

    Route::get('/hotels', [HotelsController::class, 'index'])->name('hotels.index');
    Route::get('/hotels-create', [HotelsController::class, 'create'])->name('hotels.create');
    Route::post('/hotels-create', [HotelsController::class, 'store'])->name('hotels.store');

    Route::get('/hotels-update/{id}', [HotelsController::class, 'edit'])->name('hotels.edit');
    Route::post('/hotels-update/{id}', [HotelsController::class, 'update'])->name('hotels.update');


    Route::post('/hotels-delete/{id}', [HotelsController::class, 'destroy'])->name('hotels.destroy');
});

Route::get('/home', [HomepageController::class, 'index'])->name('home');

require __DIR__ . '/auth.php';
