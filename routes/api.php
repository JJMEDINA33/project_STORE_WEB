<?php

use App\Http\Controllers\Users\ListUsersController;
use App\Http\Controllers\Users\StoreUserController;
use App\Http\Controllers\Users\UpdateUserController;
use App\Http\Controllers\Users\DeleteUserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('user/store', StoreUserController::class);

Route::get('users/list', ListUsersController::class);

Route::put('user/update/{userId}', UpdateUserController::class);

Route::delete('user/delete/{userId}', DeleteUserController::class);   
