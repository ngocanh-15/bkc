<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function loginView() {
        return view('login');
    }

    public function login(Request $request){
        $email = $request -> input('email');
        $pass = $request -> input('pass');
        if (Auth::guard('auth')->attempt([
            'email' => $email,
            'password' => $pass
        ]))
        {
            Auth::shouldUse('auth');
            session()->put('user',[
                'id' => Auth::user()->id,
                'name' => Auth::user()->name,
                'level' => Auth::user()->level
            ]);
            if (Auth::user()->admin == 1){
                return redirect()->route('admin');
            }
            else {
                return redirect()->route('home');
            }
        }
        else {
            return redirect()->back()->with('error','Sai email hoặc mật khẩu');
        }
    }

    public function signupView() {
        return view('register');
    }

    public function signup(Request $request){

    }
}
