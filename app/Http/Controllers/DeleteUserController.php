<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\Contracts\Users\UsersRepositoryInterface;
use Illuminate\Http\Request;
use App\Repositories\EloquentUsersRepository;

class DeleteUserController extends Controller
{   
    public function __construct(private readonly UsersRepositoryInterface $userRepository)
    {}

    public function __invoke(int $userId)
    {   
        $this->userRepository->delete($userId);
        //$userRepository = new EloquentUsersRepository();
        //$userRepository->delete($userId);

        return redirect()->back();
    }
}
