<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/customer', [CustomerController::class, 'GET']);
Route::get('/customer/{id}', [CustomerController::class, 'GETDetail']);
Route::post('/customer', [CustomerController::class, 'POST']);
Route::put('/customer/{id}', [CustomerController::class, 'PUT']);
Route::delete('/customer/{id}', [CustomerController::class, 'DELETE']);

Route::get('/user', [UserController::class, 'GET']);
Route::get('/user/{id}', [UserController::class, 'GETDetail']);
Route::post('/user', [UserController::class, 'POST']);
Route::put('/user/{id}', [UserController::class, 'PUT']);
Route::delete('/user/{id}', [UserController::class, 'DELETE']);