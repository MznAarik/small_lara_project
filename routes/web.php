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
    Route::get('list', [UserController::class, 'index']);
    Route::get('create', [UserController::class, 'create']);
    Route::post('store', [UserController::class, 'store']);
    Route::get('edit/{id}', [UserController::class, 'edit']);
    Route::post('update', [UserController::class, 'update']);
    Route::get('delete/{id}', [UserController::class, 'delete']);
    Route::get('/{id}', [UserController::class, 'show']);

});