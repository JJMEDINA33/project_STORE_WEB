<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Contracts\Users\UsersRepositoryInterface;
use App\Http\DTOs\AuthUsersDTO;

class EloquentUsersRepository implements UsersRepositoryInterface {

    public function create(AuthUsersDTO $authUsersDTO): void {
        
        $passwordHash = Hash::make($authUsersDTO->getPassword());
        
        User::create([
            'name'=> $authUsersDTO->getName(),
            'email'=> $authUsersDTO->getEmail(),
            'password'=> $passwordHash,
        ]);
    }

    public function list(): Collection {
        
        $users = User::all();

        return $users;
    }

    public function update(AuthUsersDTO $authUsersDTO, $userId): void {
        
        $user = User::find($userId);

        $passwordHash = Hash::make($authUsersDTO->getPassword());
        
        $user->name = $authUsersDTO->getName();
        $user->email = $authUsersDTO->getEmail();
        $user->password = $passwordHash;
        
        $user->save();
    }

    public function delete($userId): void {
        
        $user = User::find($userId);
        
        $user->delete();
    }
}
