<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    protected $fillable = ['session_id', 'product_id', 'user_id', 'quantity', 'price'];

    public function product()
    {
        return $this->belongsTo(Product::class); // наш продукт принадлежит одной корзине
    }
}
