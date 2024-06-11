<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    public function __invoke(){

        return view('users.create');
    }
}
