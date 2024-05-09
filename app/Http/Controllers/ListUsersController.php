<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\EloquentUsersRepository;
use App\Repositories\Contracts\Users\UsersRepositoryInterface;

class ListUsersController extends Controller
{
    public function __construct(private readonly UsersRepositoryInterface $usersRepository){}

    public function __invoke()
    {
        $users = $this->usersRepository->list();
        //$usersRepository = new EloquentUsersRepository();
        //$users = $usersRepository->list();
        
        return response()->json($users);
    }
}
