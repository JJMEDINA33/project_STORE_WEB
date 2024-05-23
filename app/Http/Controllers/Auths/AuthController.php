<?php

namespace App\Http\Controllers\Auths;

use App\Repositories\Contracts\Users\UsersRepositoryInterface;
use App\Http\DTOs\AuthUsersDTO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController
{
    public function __construct(private readonly UsersRepositoryInterface $userRepository)
    {}

    public function __invoke(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        $authUsersDTO = new AuthUsersDTO();

        $authUsersDTO->setEmail($email);
        $authUsersDTO->setPassword($password);

        $userOrNull = $this->userRepository->findByEmail($authUsersDTO->getEmail());


        if (!is_null($userOrNull) && Hash::check($password, $userOrNull->password)) {
            Auth::login($userOrNull);
            return redirect()->to('/home');
        }

        return redirect()->back();
    }
}
