<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request->password),
        ]);

        session()->flash('success', 'Successful registration');
        Auth::login($user); // после успешной регистрации мы сразу логируем пользователя
        return redirect()->route('index');
    }

    public function loginForm()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(3);
        return view('login', compact('users'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'password' => 'required',
        ]);

        if ((Auth::attempt([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
        ]))) {
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.index')->with('success', 'Successful Authorization');
            } else {
                return redirect()->route('index')->with('success', 'Successful Authorization');
            }
        }
        return redirect()->back()->with('error', 'Incorrect login or password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public function forgotPassword()
    {
        return view('forgot-password');
    }

    public function forgotPasswordUpdate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $emails = User::pluck('email', 'id');
//        return dd($emails);
        foreach ($emails as $k => $v) { // k - id; v - value
            if ($v == $request->email) {
                $userEmail = User::find($k);
            }
        }
//        return dd($userEmail->name);
        $password = Hash::make($request->password);
        $userEmail->update([
            'password' => $password,
        ]);
        return redirect()->route('login')->with('success', 'Password has been successfully updated');

    }

}
