<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaderController extends Controller
{
    public function index()
    {
    	return view('kader.index');
    }

<<<<<<< HEAD
    public function admin()
    {
        return view('kader.admin');
=======
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
>>>>>>> 2a6f3370fca3ff3cf751f6163c3e2e326892469a
    }
}
