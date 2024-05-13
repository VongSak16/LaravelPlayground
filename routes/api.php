<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExchangeRateController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WifiController;

    /*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/;

Route::get('/user', [UserController::class, 'GET']);
Route::get('/user/{id}', [UserController::class, 'GETDetail']);
Route::post('/user', [UserController::class, 'POST']);
Route::put('/user/{id}', [UserController::class, 'PUT']);
Route::delete('/user/{id}', [UserController::class, 'DELETE']);

Route::get('/student', [StudentController::class, 'GET']);
Route::get('/student/{sid}', [StudentController::class, 'GETDetail']);
Route::post('/student', [StudentController::class, 'POST']);
Route::put('/student/{sid}', [StudentController::class, 'PUT']);
Route::delete('/student/{sid}', [StudentController::class, 'DELETE']);


Route::get('/customer', [CustomerController::class, 'GET']);
Route::get('/customer/{CustomerID}', [CustomerController::class, 'GETDetail']);
Route::post('/customer', [CustomerController::class, 'POST']);
Route::put('/customer/{CustomerID}', [CustomerController::class, 'PUT']);
Route::delete('/customer/{CustomerID}', [CustomerController::class, 'DELETE']);

Route::get('/wifi', [WifiController::class, 'GET']);
Route::get('/wifi/{WifiID}', [WifiController::class, 'GETDetail']);
Route::post('/wifi', [WifiController::class, 'POST']);
Route::put('/wifi/{WifiID}', [WifiController::class, 'PUT']);
Route::delete('/wifi/{WifiID}', [WifiController::class, 'DELETE']);


Route::get('/exchangerate', [ExchangeRateController::class, 'GET']);
Route::get('/exchangerate/{ExchangeID}', [ExchangeRateController::class, 'GETDetail']);
Route::post('/exchangerate', [ExchangeRateController::class, 'POST']);
Route::put('/exchangerate/{ExchangeID}', [ExchangeRateController::class, 'PUT']);
Route::delete('/exchangerate/{ExchangeID}', [ExchangeRateController::class, 'DELETE']);

Route::get('/receipt', [ReceiptController::class, 'GET']);
Route::get('/receipt/{ReceiptID}', [ReceiptController::class, 'GETDetail']);
Route::post('/receipt', [ReceiptController::class, 'POST']);
Route::put('/receipt/{ReceiptID}', [ReceiptController::class, 'PUT']);
Route::delete('/receipt/{ReceiptID}', [ReceiptController::class, 'DELETE']);

