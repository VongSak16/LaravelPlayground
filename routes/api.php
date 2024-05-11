<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
;

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



