<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ortu;

class OrtuController extends Controller
{
    public function daftarOrtu(Request $req)
    {
    	return view('pasien.daftar_ortu');
    }

    public function storeOrtu(Request $req)
    {
    	$ortu = Ortu::create($req->all());

    	//dd($ortu->id);
        // return redirect('/daftar_anak/{{$req->id}}');
        //return redirect('/daftar_anak/{{$ortu->id}}');
        return view('kader.data');
    }

    public function daftarAnak(Request $req, $id)
    {
        dd($id);
    	//return view('pasien.daftar_anak');
    }

    public function storeAnak($id,Request $req)
    {
        dd($id, $req->all());
    }
}
