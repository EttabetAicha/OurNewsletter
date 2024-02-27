<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsletterController;


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
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::view('/login', 'auth.form');
Route::view('/', 'auth.form');
Route::view('/dashboard', 'dashboard');

// Route::resources([
//     'category' => CategoryController::class,
//     'mails' => MailController::class,
//     'newsletter'=> NewsletterController::class,
// ]);


Route::resource('category', CategoryController::class)->only([
    'index', 'store', 'update', 'destroy'
]);
Route::resource('newsletter', NewsletterController::class)->only([
    'index', 'store', 'update', 'destroy'
]);

Route::controller(MailController::class)->group(function () {
    Route::get('/emails', 'index');
    Route::get('/deleteEmail/{id}', 'deleteEmail');
    Route::get('/deleteAll', 'deleteAll');
    Route::get('/Export', 'export');

    Route::post('/AddEmail', 'AddEmail');
    Route::post('/EditEmail', 'EditEmail');
    Route::post('/import', 'import');
});
