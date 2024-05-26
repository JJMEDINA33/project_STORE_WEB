<?php

namespace App\Repositories\Eloquent;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class EloquentProductRepository
{
    public function store(string $name, string $image, float $price): void
    {
        Product::create([

            'name' => $name,
            'image' => $image,
            'price' => $price
        ]);
    }

    public function Getall(array $columns): Collection
    {
        return Product::all($columns);
    }

    public function update(Product $product, string $name, string $image, float $price): void
    {
        $product->name = $name;
        $product->image = $image;
        $product->price = $price;
        $product ->save();
    }

    public function findById(int $productId):?product {
        return Product::find($productId);
    }

    public function delete(int $productId): void{
        Product::Find($productId)->delete();
    }
}
