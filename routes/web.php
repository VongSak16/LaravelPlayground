<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepreciationDetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //USER
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users-edit{id}', [UserController::class, 'edit'])->name('users.edit');

    Route::get('/user',  [UserController::class, 'index']);

    Route::get('/user-create', [UserController::class, 'create']);
    Route::post('/user-create', [UserController::class, 'store']);

    Route::get('/user-delete/{id}', [UserController::class, 'deletes']);
    Route::post('/user-delete/{id}', [UserController::class, 'destroy']);

    Route::get('/user-edit/{id}', [UserController::class, 'edit']);
    Route::post('/user-edit/{id}', [UserController::class, 'update']);

    //CUSTOMER
    Route::get('/customer',  [CustomerController::class, 'index']);

    Route::get('/customer-create', [CustomerController::class, 'create']);
    Route::post('/customer-create', [CustomerController::class, 'store']);

    Route::get('/customer-delete/{id}', [CustomerController::class, 'deletes']);
    Route::post('/customer-delete/{id}', [CustomerController::class, 'destroy']);

    Route::get('/customer-edit/{id}', [CustomerController::class, 'edit']);
    Route::post('/customer-edit/{id}', [CustomerController::class, 'update']);

    //DEPRECIATIONDETAIL
    Route::get('/depreciationdetail/{id}',  [DepreciationDetailController::class, 'index']);
    Route::post('/depreciationdetail-update/{id}', [DepreciationDetailController::class, 'update']);


    //Test
    Route::get('/test',  [TestController::class, 'index']);

    Route::get('/test-create', [TestController::class, 'create']);
    Route::post('/test-create', [TestController::class, 'store']);

    //REPORT
    Route::get('/date2date',  [ReportController::class, 'date2date']);
    Route::post('/date2date_filter',  [ReportController::class, 'date2date_filter']);
});


require __DIR__ . '/auth.php';
