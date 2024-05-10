<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user', [UserController::class, 'index']);




//Route::get('/category', [CategorysController::class, 'index']);
Route::get('/product', [productController::class, 'index']);

Route::get('/subject', [SubjectController::class, 'index']);

Route::get('/subject-create', [SubjectController::class, 'create']);
Route::post('/subject-create', [SubjectController::class, 'store']);


Route::get('/subject-delete/{id}', [SubjectController::class, 'GET']);
Route::post('/subject-delete/{id}', [SubjectController::class, 'POST']);
Route::put('/subject-delete/{id}', [SubjectController::class, 'PUT']);
Route::delete('/subject-delete/{id}', [SubjectController::class, 'DELETE']);











Route::get('/setec', function () {
    return view('setec');
});

Route::get('/st2.6', function () {
    return view('st2_6');
});

// Route::get('/product', function () {
//     $data = [
//             'item'=>'15pro Max',
//             'qty'=>3,
//             'amount'=>1200.50,
//             'discount'=>10
//         ];
//     return view('product',$data);
// });

Route::get('/loop', function () {
    return view('loop');
});

Route::get('/foreach', function () {
    $students = [
        ['name'=>'Dara', 'age'=>19, 'address'=>'phnom penh'],
        ['name'=>'Nita', 'age'=>18, 'address'=>'phnom penh'],
        ['name'=>'Rysan', 'age'=>22, 'address'=>'kandal']
    ];
    $categorys = [
        ['cateid'=>101, 'catename'=>'Samsung'],
        ['cateid'=>102, 'catename'=>'Nokia']
    ];
    return view('foreach',['data'=>$students, 'title'=>'Foreach',
        'category'=>$categorys] );
});

Route::get('/param', function () {
    
    $pID = request('id');
    $pName = request('studentname');
    $pAge = request('age');
    return view('param', [
        'id'=>$pID,
        'name'=>$pName,
        'age'=>$pAge
    ]);
});

