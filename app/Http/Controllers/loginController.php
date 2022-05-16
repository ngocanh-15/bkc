<?php

namespace App\Http\Controllers;

class loginController extends Controller
{
    public function loginView() {
        return view('login');
    }

    public function signupView() {
        return view('register');
    }
}
