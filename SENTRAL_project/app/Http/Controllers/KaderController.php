<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kader;
use App\Ortu;

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
        $ortu = Ortu::all();
        //dd($ortu);
        return view('kader.data',['ortu'=>$ortu]);
    }
    public function admin()
    {
        return view('kader.admin');
    }
    public function dataPeriksa()
    {
        return view('kader.data_periksa');
    }

}
