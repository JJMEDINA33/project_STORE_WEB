<?php
// MODEL CAR
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model {
use HasFactory;

protected $fillable = [
'product_id',
'user_id',
'quantity',
];
/*public function product()
{
return $this->belongsTo(Product::class);
}*/
}
