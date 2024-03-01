<?php
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsletterController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/login', [AuthController::class, 'login']);

Route::view('/', 'auth.form');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('category', CategoryController::class)->only([
    'index', 'store', 'update', 'destroy'
]);

Route::middleware('jwt.auth')->resource('newsletter', NewsletterController::class)->only([
    'index', 'store', 'update', 'destroy'
]);

Route::middleware('jwt.auth')->group(function () {
    Route::get('/emails', [MailController::class, 'index']);
    Route::get('/deleteEmail/{id}', [MailController::class, 'deleteEmail']);
    Route::get('/deleteAll', [MailController::class, 'deleteAll']);
    Route::get('/Export', [MailController::class, 'export']);

    Route::post('/AddEmail', [MailController::class, 'AddEmail']);
    Route::post('/EditEmail', [MailController::class, 'EditEmail']);
    Route::post('/import', [MailController::class, 'import']);
});

Route::post('/send_emails', [App\Http\Controllers\SendMailController::class, 'send_emails'])->name('send_emails');

Route::get('/forget-password', [App\Http\Controllers\ForgetPasswordManger::class, 'forgetPassword'])->name('forgetPassword');
Route::post('/forget-password', [App\Http\Controllers\ForgetPasswordManger::class, 'forgetPasswordPost'])->name('forgetPasswordPost');
Route::get('/reset-password{token}', [App\Http\Controllers\ForgetPasswordManger::class, 'resetPassword'])->name("resetPassword");
Route::post('/reset-password', [App\Http\Controllers\ForgetPasswordManger::class, 'resetPasswordPost'])->name("resetPasswordPost");

Route::post('/refresh-token', [AuthController::class, 'refreshToken']);
