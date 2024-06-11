<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\DTOs\AuthUsersDTO;

class UpdateUserController extends Controller {
    
    public function __construct(private readonly UserRepositoryInterface $userRepository)
    {}

    public function __invoke(Request $request, int $userId) {
        
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $authUsersDTO = new AuthUsersDTO();

        $authUsersDTO->setUserId($userId);
        $authUsersDTO->setName($name);
        $authUsersDTO->setEmail($email);
        $authUsersDTO->setPassword($password);

        $this->userRepository->update($authUsersDTO);

        //$userRepository = new EloquentUsersRepository();
        //$userRepository->update($userId, $name, $email, $password);
        
        //return response()->json('Usuario actualizado exitosamente.');
        return redirect('users');
    }
}
