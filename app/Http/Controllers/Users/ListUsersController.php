<?php

namespace App\Http\Controllers\Users;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListUsersController extends Controller
{
    public function __invoke(){

        $users = User::all();

        return view('users.list', ['users'=> $users]);
    }
}
