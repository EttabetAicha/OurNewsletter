<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::post('/login', [AuthController::class, 'login']);

Route::post('/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::view("/login","auth.form");

Route::view("/","auth.form");
Route::view("/dashboard","dashboard");


Route::controller(MailController::class)->group(function () {
    Route::get('/emails', 'index');
    Route::get('/deleteEmail/{id}', 'deleteEmail');
    Route::get('/deleteAll', 'deleteAll');
    Route::get('/Export', 'export');
    
    Route::post('/AddEmail', 'AddEmail');
    Route::post('/EditEmail', 'EditEmail');
    Route::post('/import', 'import');
});


Route::get('/category', function () {
    return view('category');
});

