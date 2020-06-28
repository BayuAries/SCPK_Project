<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ortu;
use App\Bayi;

class OrtuController extends Controller
{
    public function daftarOrtu(Request $req)
    {
    	return view('pasien.daftar_ortu');
    }

    public function storeOrtu(Request $req)
    {
    	$ortu = Ortu::create($req->all());

    	//dd($ortu->all());
        // return redirect('/daftar_anak/{{$req->id}}');
        return redirect('/daftar_anak/'.$ortu->id);
        //return view('kader.data');
    }

    public function daftarAnak($id)
    {
        //dd($id);
    	return view('pasien.daftar_anak',['id'=>$id]);
    }

    public function storeAnak($id,Request $req)
    {
        //dd($id, $req->all());
        
        Bayi::create([
            'nama'=> $req->nama_anak,
            'id_ortu'=>$id,
            'usia'=>$req->usia,
            'jenis_kelamin'=>$req->jenis_kelamin,
        ]);

        return redirect('/daftar_ortu')->with('status','Data Berhasil ditambah');
    }
}
