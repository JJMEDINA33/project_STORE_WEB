<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;

class EditProductController extends Controller
{
    public function __invoke(int $productId){

        $products = Product::all();

        $product = Product::findOrFail($productId);
        
        return view('products', ['products' => $products, 'product' => $product]);
    }
}
