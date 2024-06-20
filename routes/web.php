<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\RoomTypesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomepageController::class, 'index'])->name('home');

Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

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
    Route::get('/roomtypes-create/{hotel_id}', [RoomTypesController::class, 'createId'])->name('roomtypes.createId');
    Route::post('/roomtypes-create', [RoomTypesController::class, 'store'])->name('roomtypes.store');

    // Route::get('/roomtypes-create/{hotel_id}', [RoomTypesController::class, 'create'])->name('roomtypes.create');

    Route::get('/roomtypes-update/{id}', [RoomTypesController::class, 'edit'])->name('roomtypes.edit');
    Route::post('/roomtypes-update/{id}', [RoomTypesController::class, 'update'])->name('roomtypes.update');

    Route::post('/roomtypes-delete/{id}', [RoomTypesController::class, 'destroy'])->name('roomtypes.destroy');

    Route::get('/getroomtypes/{hotel_id}', [RoomTypesController::class, 'getRoomTypes']);

    //ROOMS
    Route::get('/rooms', [RoomsController::class, 'index'])->name('rooms.index');
    Route::get('/rooms/{roomtype_id}', [RoomsController::class, 'indexId'])->name('rooms.indexId');

    Route::get('/rooms-create', [RoomsController::class, 'create'])->name('rooms.create');
    Route::get('/rooms-create/{roomtype_id}', [RoomsController::class, 'createId'])->name('rooms.createId');
    Route::post('/rooms-create', [RoomsController::class, 'store'])->name('rooms.store');

    Route::post('/rooms-delete/{id}', [RoomsController::class, 'destroy'])->name('rooms.destroy');

    Route::get('/getrooms/{roomtype_id}', [RoomsController::class, 'getRooms']);

    //CUSTOMERS
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

    Route::get('/customers-create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/customers-create', [CustomerController::class, 'store'])->name('customers.store');

    Route::post('/customers-delete/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');

    //BOOKS
    Route::get('/books', [BookController::class, 'index'])->name('books.index');

    Route::get('/books-create', [BookController::class, 'create'])->name('books.create');
    Route::get('/books-create-by-customer/{customer_id}', [BookController::class, 'createCustomerId'])->name('books.createCustomerId');
    Route::post('/books-create', [BookController::class, 'store'])->name('books.store');

    Route::post('/books-delete/{id}', [BookController::class, 'destroy'])->name('books.destroy');

    Route::post('/books-update-status/{id}', [BookController::class, 'updateStatus'])->name('books.updateStatus');

    //USERS
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    Route::get('/users-create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users-create', [UserController::class, 'store'])->name('users.store');

    Route::get('/users-update/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/users-update/{id}', [UserController::class, 'update'])->name('users.update');

    Route::post('/users-delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::get('/home', [HomepageController::class, 'index'])->name('home');

Route::get('/searchresults', [HomepageController::class, 'searchresults'])->name('searchresults');

require __DIR__ . '/auth.php';
