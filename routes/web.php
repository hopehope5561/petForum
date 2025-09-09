<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;


Route::get('/login', [LoginController::class, 'index']);
Route::get('/', [IndexController::class, 'index']);
Route::get('/soru-sor', [IndexController::class, 'showTopic'])->name('topic.create');
Route::post('/soru-sor', [IndexController::class, 'storeTopic']);

Route::get('/soru/{id}', action: [IndexController::class, 'showTopicDetail'])->name('topic.detail');


Route::get('/sso-make-url', function (Illuminate\Http\Request $r) {
    $email = strtolower($r->query('email', 'fatih@example.com'));
    $name = $r->query('name', 'Fatih');
    $lastName = $r->query('lastName', 'Yilmaz');
    $timestamp = $r->query('timestamp', time());
    $secret = env('EXTERNAL_SSO_SECRET', 'supersecretkey');

    $token = hash('sha256', $email . $timestamp . $secret);

    $q = http_build_query([
        'email' => $email,
        'name' => $name,
        'lastName' => $lastName,
        'timestamp' => $timestamp,
        'token' => $token,
    ]);

    return url('/login') . '?' . $q;
});


Route::get('/ticimax/uyeler', [App\Http\Controllers\TicimaxController::class, 'getUyeler']);

Route::prefix('admin')->group(function () {
   
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');

    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.post');

    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    Route::get('/users', action: [AdminController::class, 'getUsers'])->name('admin.users');

    Route::get('/topics', [AdminController::class, 'getTopics'])->name('admin.topics');
    
    Route::delete('/admin/topics/{id}', [AdminController::class, 'destroy'])->name('admin.topics.destroy');
    
    Route::get('/topics/{id}', [AdminController::class, 'show'])
    ->name('admin.topics.show');

    Route::delete('/admin/comments/{id}', [AdminController::class, 'destroyComment'])
    ->name('admin.comments.destroy');

    Route::get('/users/{id}', [AdminController::class, 'showUser'])->name('admin.users.show');
    Route::delete('/users/{id}', [AdminController::class, 'destroyUser'])->name('admin.users.destroy');
    Route::put('/users/{id}', [AdminController::class, 'updateUser'])->name('admin.users.update');  

});


