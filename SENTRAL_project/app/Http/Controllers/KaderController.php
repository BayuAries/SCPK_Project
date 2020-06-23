<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaderController extends Controller
{
    public function index()
    {
    	return view('kader.index');
    }

    public function admin()
    {
        return view('kader.admin');
    }
}
