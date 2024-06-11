<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomTypesController;
use App\Models\RoomTypes;
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

    //HOTELS
    Route::get('/hotels', [HotelsController::class, 'index'])->name('hotels.index');

    Route::get('/hotels-create', [HotelsController::class, 'create'])->name('hotels.create');
    Route::post('/hotels-create', [HotelsController::class, 'store'])->name('hotels.store');

    Route::get('/hotels-update/{id}', [HotelsController::class, 'edit'])->name('hotels.edit');
    Route::post('/hotels-update/{id}', [HotelsController::class, 'update'])->name('hotels.update');

    Route::post('/hotels-delete/{id}', [HotelsController::class, 'destroy'])->name('hotels.destroy');

    //ROOMTYPES
    Route::get('/roomtypes', [RoomTypesController::class, 'index'])->name('roomtypes.index');
    Route::get('/roomtypes/{hotel_id}', [RoomTypesController::class, 'indexId'])->name('roomtypes.indexId');

    Route::get('/roomtypes-create', [RoomTypesController::class, 'create'])->name('roomtypes.create');
    // Route::get('/roomtypes-create/{hotel_id}', [RoomTypesController::class, 'create'])->name('roomtypes.create');
    Route::post('/roomtypes-create', [RoomTypesController::class, 'store'])->name('roomtypes.store');

    Route::get('/roomtypes-update/{id}', [RoomTypesController::class, 'edit'])->name('roomtypes.edit');
    Route::post('/roomtypes-update/{id}', [RoomTypesController::class, 'update'])->name('roomtypes.update');

    Route::post('/roomtypes-delete/{id}', [RoomTypesController::class, 'destroy'])->name('roomtypes.destroy');
});

Route::get('/home', [HomepageController::class, 'index'])->name('home');

require __DIR__ . '/auth.php';
