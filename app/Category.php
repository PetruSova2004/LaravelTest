<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'slug'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
