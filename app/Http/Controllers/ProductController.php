<?php

namespace App\Http\Controllers;


use App\Cart;
use App\Product;
use App\Subscribers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $products = Product::all();
            $authUser = Auth::user();
            $subscribers = DB::table('subscribers')->pluck('email'); // вытаскиваем все записи из данной колонки
            $percent = 20;

            foreach ($subscribers as $subscriber) {
                if ($subscriber == $authUser->email) {
                    return view('products', compact('products', 'authUser', 'subscriber', 'percent'));
                }
            }
        }
        $products = Product::all();
        $authUser = Auth::user();
        $subscriber = false;
        return view('products', compact('products', 'subscriber', 'authUser'));

    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('single-product', compact('product'));
    }

    public function test()
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->paginate(2);

        return view('show-cart', compact('carts'));
    }

}
