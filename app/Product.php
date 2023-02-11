<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = ['category_id', 'slug', 'title', 'description', 'content', 'price', 'img'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cart()
    {
        return $this->belongsToMany(Cart::class); // нас Продукт имеет много корзин
    }

    public function favorite()
    {
        return $this->belongsToMany(Favorites::class);
    }
}
