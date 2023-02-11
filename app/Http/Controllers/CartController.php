<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addCartToDb($product_id, $user)
    {
        $products = Product::where('id', $product_id)->firstOrFail();
        $userId = User::where('id', $user)->firstOrFail();

        $cart = Cart::create([
            'product_id' => $product_id,
            'user_id' => $userId->id,
            'quantity' => 1,
            'price' => $products->price,
        ]);
        return redirect()->route('show.products');
    }

    public function showCart()
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->paginate(6);
        if (Auth::check()) {
            $products = Product::all();
            $authUser = Auth::user();
            $subscribers = DB::table('subscribers')->pluck('email'); // вытаскиваем все записи из данной колонки
            $percent = 20;

            foreach ($subscribers as $subscriber) {
                if ($subscriber == $authUser->email) {
                    return view('show-cart', compact('products', 'authUser', 'subscriber', 'percent', 'carts'));
                }
            }
            $subscriber = false;
            return view('show-cart', compact('products', 'subscriber', 'authUser', 'carts'));
        }
    }

    public function deleteCart($cart_id)
    {
//        $user = Auth::user();
        $cart = Cart::where('id', $cart_id);

        $cart->delete();
        return redirect()->route('show.cart');
    }

}
