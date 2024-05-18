<?php
namespace App\Repositories\Eloquent;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Collection; 

Class EloquentCartRepository
{

public const QUANTITY_INIT = 1;

public function GetUserCart(int $userId): Collection
{
return Cart::where('user_id', '=', $userId)->get();
}

public function GetUserCartByProduct(int $userId, int $productId): ?Cart
{
return Cart::where('product_id', '=', $productId)
->where('user_id', '=', $userId)
->first();
}

public function CreateInitUserCartProduct(int $userId, int $productId): Cart
{
return Cart::Create([
'user_id' => $userId,
'product_id' => $productId,
'quantity' => self::QUANTITY_INIT
]);
}
public function AddAnUnitQuantity(Cart $cart): void
{
$cart->quantity++;
$cart->save();
}
public function RemoveAndUnitQuantity(Cart $cart): void
{
$cart->quantity--;
$cart->save();
}
public function deleteCart(int $cartId): void
{
Cart::destroy($cartId);
}
public function clearCart(int $userId): void
{
Cart::where('user_id', '=', $userId)->delete();
}
}
