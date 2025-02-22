<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('register', [RegisterController::class, 'register']);
Route::post('signup', [RegisterController::class, 'signup']);
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);

Route::prefix('employee/')->group(function () {
    Route::get('list', [UserController::class, 'index'])->name('employee.index');
    Route::get('create', [UserController::class, 'create'])->name('employee.create');
    Route::post('store', [UserController::class, 'store'])->name('employee.store');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('employee.edit');
    Route::post('update', [UserController::class, 'update'])->name('employee.update');
    Route::get('delete/{id}', [UserController::class, 'delete'])->name('employee.delete');
    // Route::get('search', [UserController::class, 'search']) ->name('employee.search');
    Route::get('show/{id}', [UserController::class, 'show'])->name('employee.show');
});