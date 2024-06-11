<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

class EditUserController extends Controller
{
    public function __invoke(int $userId){

        $user = User::find($userId);
        
        return view('users.edit', ['user' => $user]);
    }
}
