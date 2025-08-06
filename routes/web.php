<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;


Route::get('/login', [LoginController::class, 'index']);
Route::get('/', [IndexController::class, 'index']);

Route::prefix('admin')->group(function () {
   
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');

    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.post');

    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    Route::get('/users', action: [AdminController::class, 'getUsers'])->name('admin.users');

});


