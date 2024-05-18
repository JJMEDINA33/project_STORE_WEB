<?php

namespace App\Repositories\Contracts\Users;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use App\Http\DTOs\AuthUsersDTO;

interface UsersRepositoryInterface {

    public function create(AuthUsersDTO $authUsersDTO): void;

    public function list(): Collection;

    public function update(AuthUsersDTO $authUsersDTO): void;

    public function delete($userId): void;
    
}