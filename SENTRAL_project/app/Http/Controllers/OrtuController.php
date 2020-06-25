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
    	\App\Ortu::create($req->all());

    	//dd($req->all());
        // return redirect('/kader/daftar_anak/{{$req->id}}');
        return redirect('/kader/admin');
    }

    public function daftarAnak(Request $req, $id)
    {
    	return view('pasien.daftar_anak');
    }


}
