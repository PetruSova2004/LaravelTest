<?php

namespace App\Http\Controllers;

use App\Subscribers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubscriberController extends Controller
{
    public function index()
    {
        return view('subscribe');
    }

    public function store(Request $request)
    {
        $subscribers_ids = DB::table('subscribers')->pluck('user_id');
        $user = Auth::user();
        $request->validate([
            'email' => 'required|email'
        ]);

        foreach ($subscribers_ids as $id) {
            if ($id === $user->id || $request->email !== $user->email) {
                return redirect()->route('subscribe')->with('error', 'You already are subscribed');
            }
        }
        $subscriber = Subscribers::create([
            'email' => $request->email,
            'user_id' => $user->id,
        ]);

        return redirect()->route('index')->with('success', "You successfully subscribed by {$user->email}");

    }

}
