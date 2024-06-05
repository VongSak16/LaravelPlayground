<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/customer', [CustomerController::class, 'GET']);
Route::get('/customer/{CustomerID}', [CustomerController::class, 'GETDetail']);
Route::post('/customer', [CustomerController::class, 'POST']);
Route::put('/customer/{CustomerID}', [CustomerController::class, 'PUT']);
Route::delete('/customer/{CustomerID}', [CustomerController::class, 'DELETE']);