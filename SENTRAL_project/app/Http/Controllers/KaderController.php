<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kader;
use App\Ortu;
use App\Bayi;
use App\Tinggi;
use App\Berat;

class KaderController extends Controller
{


    public function index()
    {
    	return view('kader.index');
    }

     public function periksa($id)
    {
        $bayi = Bayi::find($id);
        // dd($bayi->all());
    	return view('kader.periksa',['bayi'=>$bayi]);
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

        public function showAnak()
    {
        // $tinggi = Tinggi::all();
        // $b = Berat::all();
        // dd($tinggi->all(),$b->all());
        $bayi = Bayi::orderBy('created_at','asc')->get();
        $ortu = Ortu::where('id');
        //dd($bayi->all());
        return view('pasien.bayi',['bayi'=>$bayi]);
    }

}
