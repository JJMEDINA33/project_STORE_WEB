<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\ProductRepositoryInterface;
use Illuminate\Http\Request;

class DeleteProductController extends Controller
{
    public function __construct(private readonly ProductRepositoryInterface $productRepository){}

    public function __invoke(int $productId){

        $this->productRepository->delete($productId);

        return redirect()->back()->with('success', 'Producto eliminado.');
    }
}
