<?php

namespace App\Http\Controllers\Auths;

use App\UseCases\UsersValidationUC;

use App\Http\DTOs\AuthUsersDTO;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    private UsersValidationUC $userValidationUC;

    public function __construct(UsersValidationUC $userValidationUC)
    {
        $this->userValidationUC = $userValidationUC;
    }

    public function __invoke(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        $authUserDTO = new AuthUsersDTO();

        $authUserDTO->setEmail($email);
        $authUserDTO->setPassword($password);         
        
        if ($this->userValidationUC->validateUser($authUserDTO)) {
            
            return redirect()->to('/home');
        }
        
        return redirect()->back();
    }
}
