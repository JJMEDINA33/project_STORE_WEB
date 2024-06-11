<?php

namespace App\Http\Controllers\Products;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListProductsController extends Controller
{
    public function __invoke(){

        $products = Product::all();

        return view('products', ['products' => $products]);
    }
}
