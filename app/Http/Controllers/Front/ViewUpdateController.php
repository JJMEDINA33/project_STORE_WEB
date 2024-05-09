<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\EloquentUsersRepository;
use Illuminate\Http\Request;
use App\Models\User;

class ViewUpdateController extends Controller
{
    public function __invoke(int $userId){

        $user = User::find($userId);
        
        return view('update', ['user' => $user]);
    }
}
