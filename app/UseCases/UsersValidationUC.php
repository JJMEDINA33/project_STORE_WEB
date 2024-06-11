<?php

namespace App\UseCases;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Http\DTOs\AuthUsersDTO;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersValidationUC {
    
    public function __construct(private readonly UserRepositoryInterface $userRepository)
    {}

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