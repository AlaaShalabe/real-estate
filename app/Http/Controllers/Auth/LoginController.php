<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $user = new User();
        $request->validate([
            'name' => 'required|string|min:3|max:20',
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:8|max:12|confirmed'
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['email']);
        $user['uniqueId'] = md5($request['email']);
        // dd($request);
        $user->save();
        Auth::attempt([
            'email'   => $user['email'],
            'password' => $user['password_confirmation']
        ]);
        return view('posts.create');
        // return Auth::user();
    }
    public function show()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $user = $request->validate([
            'email' => ['string', 'email'],
            'password' => ['string']
        ]);
        // dd('$user');
        if (Auth::attempt($user)) {
            return "hello !!!";
        } else {
            return "Wroing Email or Password";
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->invalidate();
        $request->session()->regenerateToken();
        redirect('/');
    }
}
