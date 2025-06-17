<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Service\ExpenseService;



class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login'); 
    }

    public function register()
    {
        return view('auth.register'); 
    }

    public function loginPost(Request $r)
    {
        $r->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $r->only('username', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->intended(route('homepage'));
        }

        return redirect()->route('login')->with('error', 'Login failed');
    }

    function registerPost(Request $r)
    {
        $r->validate([
            "username" => "required",
            "email" => "required",
            "password" => "required",
        ]);

        $user = new User();
        $user->username = $r->username;
        $user->email = $r->email;
        $user->password = Hash::make($r->password);

        if($user->save()){
            return redirect(route("login"))->with("success","User Created Successfully");
        }
        return redirect(route("register"))->with("error, Failed Registration");
    }
}
