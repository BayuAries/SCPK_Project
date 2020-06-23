<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
