<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquent\EloquentCartRepository;
use App\Repositories\Eloquent\EloquentProductRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  
public function __invoke()
{
/*    
if (Auth::guest()) {
return redirect()->to('/login');
}
*/
$userId = Auth::id();

$productRepository = new EloquentProductRepository();
//$cartRepository = new EloquentCartRepository();;
$products = $productRepository->getAll(['id', 'name', 'price', 'image']);
//$carts = $cartRepository->getUserCart($userId);
$quantityTotal = 0;

//foreach ($carts as $cart) {
//$quantityTotal += $cart->quantity;
//}

return view('home', [
'products' => $products,
'quantityTotal' => $quantityTotal 
]);
}
}