<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function daftar()
    {
      return view('kader.daftar');
    }

    public function login()
    {
      return view('kader.login');
    }


}