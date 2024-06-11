<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;
use App\Http\DTOs\AuthProductsDTO;

interface ProductRepositoryInterface {

    public function store(AuthProductsDTO $authProductsDTO): void;

    public function list(): Collection;

    public function update(AuthProductsDTO $authProductsDTO): void;

    public function delete($productId): void;
    
}