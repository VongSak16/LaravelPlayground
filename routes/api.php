<?php

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



