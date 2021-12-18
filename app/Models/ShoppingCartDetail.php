<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCartDetail extends Model
{

    use HasFactory;
    protected $fillable = [
        'quantity',
        'price',
        'product_id',
        'shopping_cart_id',
    ];
   
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function total()
    {
        return $this->quantity * $this->price;
    }
}
