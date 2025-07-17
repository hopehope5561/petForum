<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;


Route::get('/login', [LoginController::class, 'index']);
Route::get('/index', [IndexController::class, 'index']);