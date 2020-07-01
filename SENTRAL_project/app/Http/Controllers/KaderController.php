<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kader;
use App\Ortu;
use App\Bayi;
use App\Tinggi;
use App\Berat;
use App\Gizi;

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
    public function hasil($id)
    {
        $gizi = Gizi::find($id);
        $bayi = Bayi::where('id', $gizi->bayi_id)->get();
         // dd($gizi, $bayi);
    	return view('kader.hasil',['gizi'=>$gizi, 'bayi'=>$bayi])->with('status','Data Berhasil ditambah');
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
        $gizi = Gizi::all();

        return view('kader.data_periksa',['gizi' => $gizi]);
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
