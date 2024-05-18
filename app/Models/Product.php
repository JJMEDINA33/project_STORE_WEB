<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
 //creamos un modelo con el fillable creando un array de nuestras caracteristicas
    protected $fillable =[
        'name',
        'image',
        'price'
    ];
    
}