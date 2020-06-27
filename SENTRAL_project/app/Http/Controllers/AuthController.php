<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

    public function postlogin(Request $req)
    {
    	if(Auth::attempt($req->only('email','password'))){
            return redirect('/kader');
        }

        return redirect('/login');
    }
}
