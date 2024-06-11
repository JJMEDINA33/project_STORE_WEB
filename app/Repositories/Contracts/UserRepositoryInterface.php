<?php

namespace App\Repositories\Contracts;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use App\Http\DTOs\AuthUsersDTO;

interface UserRepositoryInterface {

    public function store(AuthUsersDTO $authUsersDTO): void;

    public function list(): Collection;

    public function update(AuthUsersDTO $authUsersDTO): void;

    public function delete($userId): void;

    public function findByEmail(string $email):?User;
    
}