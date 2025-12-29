<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ShowLoginController;
use App\Http\Controllers\Auth\StoreLoginController;
use App\Http\Controllers\Auth\ShowRegisterController;
use App\Http\Controllers\Auth\StoreRegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Autenticação
|--------------------------------------------------------------------------
*/

Route::get('/login', [ShowLoginController::class, 'showLogin'])->name('login.show');
Route::post('/login', [StoreLoginController::class, 'storeLogin'])->name('login.store');

Route::get('/register', [ShowRegisterController::class, 'showRegister'])->name('register.show');
Route::post('/register', [StoreRegisterController::class, 'storeRegister'])->name('register.store');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Áreas protegidas
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/user', [DashboardController::class, 'user'])->middleware('role:user,premium,admin'); #role user nao e obrigatorio#

    Route::get('/premium', [DashboardController::class, 'premium'])->middleware('role:premium,admin');

    Route::get('/admin', [DashboardController::class, 'admin'])->middleware('role:admin');

});
