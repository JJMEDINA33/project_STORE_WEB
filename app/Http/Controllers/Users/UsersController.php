<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UserRepositoryInterface;

class ListUsersController extends Controller {
    
    public function __construct(private readonly UserRepositoryInterface $usersRepository){}

    public function __invoke()
    {
        $users = $this->usersRepository->list();
        //$usersRepository = new EloquentUsersRepository();
        //$users = $usersRepository->list();
        
        return response()->json($users);
    }
}
