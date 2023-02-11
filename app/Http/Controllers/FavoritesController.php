<?php

namespace App\Http\Controllers;

use App\Favorites;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoritesController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            return view('favorites');
        }
        return redirect()->back();
    }

    public function addToFavorites($product_id, $user_id)
    {
        $product = Product::where('id', $product_id)->firstOrFail();
        $user = User::where('id', $user_id)->firstOrFail();

        $favorite = Favorites::create([
            'product_id' => $product->id,
            'user_id' => $user_id,
        ]);

        return redirect()->back()->with('success', 'Product had successfully added to favorites');
    }
}
