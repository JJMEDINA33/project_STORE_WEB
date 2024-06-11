<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UserRepositoryInterface;

class DeleteUserController extends Controller {
       
    public function __construct(private readonly UserRepositoryInterface $userRepository){}

    public function __invoke(int $userId)
    {   
        $this->userRepository->delete($userId);
        //$userRepository = new EloquentUsersRepository();
        //$userRepository->delete($userId);

        return redirect()->back();
    }
}
