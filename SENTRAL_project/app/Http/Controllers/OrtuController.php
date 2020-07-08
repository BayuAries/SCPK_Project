<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ortu;
use App\Bayi;
use App\Gizi;
use App\Berat;  //Berat badan berdasarkan tabel Antopometri Normal
use App\Tinggi;     //Tinggi badan berdasarkan tabel Antopometri Normal
use App\Vaksin;
use Carbon;

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
        // dd($id, $req->all());
        $year = Carbon\Carbon::parse($req->tanggal_lahir)->diff(\Carbon\Carbon::now())->format('%y');
        $month = Carbon\Carbon::parse($req->tanggal_lahir)->diff(\Carbon\Carbon::now())->format('%m');
        Bayi::create([
            'nama'=> $req->nama_anak,
            'ortu_id'=>$id,
            'tanggal_lahir'=>$req->tanggal_lahir,
            'usia'=>$month+$year*12,
            'jenis_kelamin'=>$req->jenis_kelamin,
        ]);




        // dd($year,$year*12, $month+$year*12, $req->tanggal_lahir);

        return redirect('/daftar_ortu')->with('status','Data Berhasil ditambah');
    }

    public function cekAnak($id,Request $req)
    {
        $bayi = Bayi::find($id);
        $year = Carbon\Carbon::parse($bayi->tanggal_lahir)->diff(\Carbon\Carbon::now())->format('%y');
        $month = Carbon\Carbon::parse($bayi->tanggal_lahir)->diff(\Carbon\Carbon::now())->format('%m');

        $bayi->usia = $month+$year*12;

        // dd($bayi->usia);

        $bayi->save();

        //dd($req->all());

        //Tinggi badan berdasarkan tabel Antopometri Normal
        $tinggi = Tinggi::where('bulan', $bayi->usia)->where('gender', $bayi->jenis_kelamin)->get();

        //Berat badan berdasarkan tabel Antopometri Normal
        $berat = Berat::where('bulan', $bayi->usia)->where('gender', $bayi->jenis_kelamin)->get();

        //table gizi
        $gizi = new Gizi();

        // cek z-score berdasar Berat Badan / umur
        if ($req->berat) {
            
            foreach ($berat as $value) {
                if ($req->berat > $value->median){
                    $gizi->hasil1 = (($req->berat - $value->median) / ($value->plussd - $value->median));
                }
                elseif ($req->berat < $value->median){
                    $gizi->hasil1 = (($req->berat - $value->median) / ($value->median - $value->minsd));
                }
                elseif ($req->berat = $value->median) {
                    $gizi->hasil1 = (($req->berat - $value->median) / $value->median);
                    $gizi->bb_u = 'Baik';
                }
            }

        }

        // cek z-score berdasar Tinggi Badan / umur
        if ($req->tinggi) {
            foreach ($tinggi as $key) {
                if ($req->tinggi > $key->median) {
                    $gizi->hasil2 = (($req->tinggi - $key->median) / ($key->plussd - $key->median));
                }
                elseif ($req->tinggi < $key->median){
                    $gizi->hasil2 =  (($req->tinggi - $key->median) / ($key->median - $key->minsd));
                }
                elseif ($req->tinggi = $key->median) {
                    $gizi->hasil2 = (($req->tinggi - $key->median) / $key->median);
                    $gizi->tb_u = 'Normal';
                }
            }

        }

        // cek kategori ambang batas Berat/usia dari z-score
        if ($gizi->hasil1){
            if ($gizi->hasil1 < -3){
                $gizi->bb_u = 'Buruk';
            }elseif ($gizi->hasil1 >= -3 && $gizi->hasil1 < -2) {
                $gizi->bb_u = 'Kurang';
            }elseif (-2 <= $gizi->hasil1 && $gizi->hasil1 <= 2) {
                $gizi->bb_u = 'Baik';
            }elseif ($gizi->hasil1 > 2) {
                $gizi->bb_u = 'Lebih';
            }
        }

        // cek kategori ambang Tinggi/usia batas dari z-score
        if ($gizi->hasil2){
            if ($gizi->hasil2 < -3){
                $gizi->tb_u = 'Sangat Pendek';
            }elseif ($gizi->hasil2 >= -3 && $gizi->hasil2 < -2) {
                $gizi->tb_u = 'Pendek';
            }elseif (-2 <= $gizi->hasil2  && $gizi->hasil2 <= 2) {
                $gizi->tb_u = 'Normal';
            }elseif ($gizi->hasil2 > 2) {
                $gizi->tb_u = 'Tinggi';
            }
        }


        // input data Form Cek Bayi
        $gizi->bayi_id = $bayi->id;
        $gizi->berat_badan = $req->berat;
        $gizi->tinggi = $req->tinggi;
        $gizi->usia = $bayi->usia;

        // dd($gizi->hasil1, $gizi->hasil2, $gizi->bb_u, $gizi->tb_u, $gizi->bayi_id, $gizi->berat_badan,  $gizi->tinggi,$gizi->usia);

        $gizi->save();

        $id_new = $gizi->id;

        // dd($id_new);
        return redirect('/hasil/'.$id_new);

    }
}
