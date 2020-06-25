<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kader;

class KaderController extends Controller
{


    public function index()
    {
    	return view('kader.index');
    }

     public function periksa()
    {
    	return view('kader.periksa');
    }
    public function hasil()
    {
    	return view('kader.hasil');
    }
    public function data()
    {
    	return view('kader.data');
    }
    public function admin()
    {
        return view('kader.admin');
    }
    
    //insert table kader
    public function store(Request $req)
    {

        \App\Kader::create($req->all());


        return redirect('/login');
    }

    #login
    public function login(Request $req)
    {
        if(Kader::attempt($req->only('email','password'))){
            return redirect('/kader');
        }

        return redirect('/login');
    }


}
