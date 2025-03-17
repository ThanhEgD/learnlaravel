<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\LogoutMiddleware;
use App\Http\Controllers\Backend\UserController;


Route::get('/', function () {
    return view('welcome');
});


//Backend route
Route::get('dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index')->middleware(AuthenticateMiddleware::class);

//-------USER--------
Route::group(['prefix' => 'user'], function(){
    Route::get('index', [UserController::class, 'index'])->name('user.index')->middleware(AuthenticateMiddleware::class);
    Route::get('create', [UserController::class, 'create'])->name('user.create')->middleware(AuthenticateMiddleware::class);
});


Route::get('admin', [AuthController::class, 'index'])->name('auth.admin')->middleware(LogoutMiddleware::class);

Route::post('login', [AuthController::class, 'login'])->name('auth.login');

Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');