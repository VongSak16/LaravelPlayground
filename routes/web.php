<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\ExspenseController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\SubjectController;
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

// Route::get('/product', function () {
//     return view(
//         'product',
//         [
//             'product' => 'Iphone 15 Pro',
//             'qty' => 3,
//             'amount' => 1200.50,
//             'dis' => 10
//         ],
//     );
// });

Route::get('/loop1_triangle', function () {
    return view('loop1_triangle');
});

Route::get('/loop2_table', function () {
    return view('loop2_table');
});

Route::get('/category',  [CategorysController::class, 'index']);
Route::get('/student',  [StudentsController::class, 'index']);

Route::get('/product', [productsController::class, 'index']);

Route::get('/admin ', [AdminController::class, 'index']);
Route::get('/expense ', [ExspenseController::class, 'index']);

Route::get('/subject', [SubjectController::class, 'index']);

Route::get('/subject-create', [SubjectController::class, 'create']);
Route::post('/subject-create', [SubjectController::class, 'store']);

Route::get('/subject-delete/{id}', [SubjectController::class, 'delete']);
Route::post('/subject-delete/{id}', [SubjectController::class, 'destroy']);