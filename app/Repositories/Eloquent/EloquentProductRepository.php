<?php

namespace App\Repositories\Eloquent;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Http\DTOs\AuthProductsDTO;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EloquentProductRepository implements ProductRepositoryInterface {

    public function store(AuthProductsDTO $authProductsDTO): void{
        Product::create([
            'name' => $authProductsDTO->getName(),
            'image' => $authProductsDTO->getImage(),
            'price' => $authProductsDTO->getPrice(),
        ]);
    }
    public function list(): Collection {
        return Product::all();
    }
    public function update(AuthProductsDTO $authProductsDTO): void {

        $product = Product::find($authProductsDTO->getProductId());

        $product->name = $authProductsDTO->getName();
        $product->image = $authProductsDTO->getImage();
        $product->price = $authProductsDTO->getPrice();

        $product ->save();
    }    
    public function delete($productId): void {

        $product = Product::Find($productId);
        
        if($product){
            $product->delete();
        }else{
        throw new ModelNotFoundException("Product not found with ID: $productId.");
        }
    }
    public function findById(int $productId):?product {
        return Product::find($productId);
    }
}
