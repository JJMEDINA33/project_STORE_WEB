<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\DTOs\AuthUsersDTO;
use App\Repositories\Contracts\UserRepositoryInterface;

class StoreUserController extends Controller {
       
    public function __construct(private readonly UserRepositoryInterface $userRepository)
    {}

    public function __invoke(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        //Cuando usamos DTO
        $authUsersDTO = new AuthUsersDTO();

        $authUsersDTO->setName($name);
        $authUsersDTO->setEmail($email);
        $authUsersDTO->setPassword($password);
        //Cuando implementamos DTOs.
        $this->userRepository->store($authUsersDTO);

        // CUANDO HACEMOS EL LLAMADO A TRAVES DE UN CONTRATO (sin implementar DTOs).
        //$this->userRepository->create($name, $email, $password);
        
        // CUANDO HACEMOS EL LLAMADO DIRECTAMENTE DEL REPOSITORIO.
        //$userRepository = new EloquentUsersRepository;
        //$userRepository->store($name, $email, $password);
        
        // PARA TRABAJAR A NIVEL API.
        //return response()->json('Usuario registrado exitosamente.');
        // PARA EJECUTAR A NIVEL WEB.
        return view('users.create');
    }
}