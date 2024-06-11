<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auths\AuthController;
use App\Http\Controllers\Auths\LogoutController;
use App\Http\Controllers\Users\ListUsersController;
use App\Http\Controllers\Users\CreateUserController;
use App\Http\Controllers\Users\StoreUserController;
use App\Http\Controllers\Users\EditUserController;
use App\Http\Controllers\Users\UpdateUserController;
use App\Http\Controllers\Users\DeleteUserController;

use App\Http\Controllers\Products\ListProductsController;
use App\Http\Controllers\Products\StoreProductController;
use App\Http\Controllers\Products\DeleteProductController;
use PhpParser\Node\Expr\List_;

Route::get('/', function () {return view('welcome');});

Route::get('/test-view', function () {return view('testing');});

Route::get('/', HomeController::class);
Route::get('/home', HomeController::class);

Route::get('/users/create', CreateUserController::class);
Route::post('users/store', StoreUserController::class);

Route::get('/login', function () {return view('users.login');});
 Route::post('auth', AuthController::class);
Route::get('logout', LogoutController::class);

Route::middleware('auth')->group(function(){        
    //Route::get('cart-summary', CartSummaryController::class);
    Route::middleware('access')->group(function(){
        Route::get('/users', ListUsersController::class);
        Route::get('/user/edit/{userId}/', EditUserController::class);
        Route::put('update/{userId}', UpdateUserController::class);
        Route::delete('delete/{userId}', DeleteUserController::class);
        
        Route::get('/products', function(){return view('products');});
        Route::post('product/store', StoreProductController::class);
        Route::get('/products', ListProductsController::class);      
        
        Route::delete('product/delete/{productId}', DeleteProductController::class);
    }); 
});
