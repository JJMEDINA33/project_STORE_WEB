<?php

use App\Http\Controllers\ListUsersController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\UpdateUserController;
use App\Http\Controllers\DeleteUserController;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('user/create', CreateUserController::class);

Route::get('users/list', ListUsersController::class);

Route::put('user/update/{userId}', UpdateUserController::class);

Route::delete('user/delete/{userId}', DeleteUserController::class);   
