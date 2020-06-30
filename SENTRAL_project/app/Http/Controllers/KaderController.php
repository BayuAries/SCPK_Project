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

        public function showAnak()
    {
        $tinggi = Tinggi::all();
        $b = Berat::all();
        dd($tinggi->all(),$b->all());
        //$anak = Bayi::orderBy('created_at','asc')->get();
        //$ortu = Ortu::whereIn('id');
        //dd($anak->all());
        //return view('pasien.anak',['anak'=>$anak]);
    }

}
