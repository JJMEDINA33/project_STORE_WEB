<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\DTOs\AuthProductsDTO;
use App\Repositories\Contracts\ProductRepositoryInterface;
use Illuminate\Http\Request;

class UpdateProductController extends Controller
{
    public function __construct(private readonly ProductRepositoryInterface $productRepository){}

    public function __invoke(Request $request, int $productId) {
        
        $name = $request->input('name');
        $image = $request->input('image');
        $price = $request->input('price');

        $authProductsDTO = new AuthProductsDTO();

        $authProductsDTO->setProductId($productId);
        $authProductsDTO->setName($name);
        $authProductsDTO->setImage($image);
        $authProductsDTO->setPrice($price);

        $this->productRepository->update($authProductsDTO);

        return redirect('products')->with('success', 'Producto actualizado exitosamente.');
    }
}
