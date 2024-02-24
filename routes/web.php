<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
    return view(
        'product',
        [
            'product' => 'Iphone 15 Pro',
            'qty' => 3,
            'amount' => 1200.50,
            'dis' => 10
        ],
    );
});
Route::get('/test', function () {
    return view('test');
});

