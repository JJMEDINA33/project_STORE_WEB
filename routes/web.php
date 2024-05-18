<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\ViewUsersController;
use App\Http\Controllers\Front\ViewStoreController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\DeleteUserController;
use App\Http\Controllers\Front\ViewUpdateController;
use App\Http\Controllers\UpdateUserController;






Route::get('/', function () {
    return view('welcome');
});

Route::get('home', HomeController::class);

Route::get('users', ViewUsersController::class);

Route::get('store', ViewStoreController::class);
Route::post('create', CreateUserController::class);

Route::get('viewupdate/{userId}/', ViewUpdateController::class);
Route::put('update/{userId}', UpdateUserController::class);

Route::delete('delete/{userId}', DeleteUserController::class);
