<?php

namespace App\UseCases;

use App\Repositories\Contracts\Users\UsersRepositoryInterface;
use App\Http\DTOs\AuthUsersDTO;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersValidationUC 
{
    private UsersRepositoryInterface $userRepository;


    public function __construct(UsersRepositoryInterface $userRepository)
    { 
        $this->userRepository = $userRepository;
    }

    public function validateUser(AuthUsersDTO $authUserDTO):bool
    {
        $userOrNull = $this->userRepository->findByEmail($authUserDTO->getEmail());

        if (!is_null($userOrNull) && Hash::check($authUserDTO->getPassword(), $userOrNull->password)) {
            Auth::login($userOrNull);

            return true;
        }
        
        return false;
    }
}