<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewUsersController extends Controller
{
    public function __invoke(){

        $users = User::all();

        return view('users', ['users'=> $users]);
    }
}
