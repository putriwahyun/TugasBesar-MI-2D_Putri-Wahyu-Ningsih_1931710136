<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('tugasBesar.login');
    }
    public function postlogin(Request $request)
    {
        if(!auth()->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->back();
        }
        return redirect()->route('home');
    }
    public function register()
    {
        return view('tugasBesar.register');
    }
    public function postregister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        
        auth()->loginUsingId($user->id);
        return redirect()->route('home')->with('sudahLogin', 'Login Succesfully!');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
