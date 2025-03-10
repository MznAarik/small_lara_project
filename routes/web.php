<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserAuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');
Route::get('register', [RegisterController::class, 'register']);
Route::post('emailVerification', [RegisterController::class, 'emailVerification']);
Route::get('verify-email', [RegisterController::class, 'verify_email']);
Route::post('signup', [RegisterController::class, 'signup']);
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);

Route::middleware('AuthCheck')->prefix('employee/')->name('employee.')->group(function () {
    Route::get('list', [UserController::class, 'index'])->name('index');
    Route::get('create', [UserController::class, 'create'])->name('create');
    Route::post('store', [UserController::class, 'store'])->name('store');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::post('update', [UserController::class, 'update'])->name('update');
    Route::get('delete/{id}', [UserController::class, 'delete'])->name('delete');
    // Route::get('search', [UserController::class, 'search']) ->name('employee.search');
    Route::get('show/{id}', [UserController::class, 'show'])->name('show');
});