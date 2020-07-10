<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kader;
use App\Ortu;
use App\Bayi;
use App\Tinggi;
use App\Berat;
use App\Gizi;
use App\Vaksin;
use Carbon;

class KaderController extends Controller
{


    public function index()
    {
    	return view('kader.index');
    }

     public function periksa($id)
    {
        $bayi = Bayi::find($id);
        $year = Carbon\Carbon::parse($bayi->tanggal_lahir)->diff(\Carbon\Carbon::now())->format('%y');
        $month = Carbon\Carbon::parse($bayi->tanggal_lahir)->diff(\Carbon\Carbon::now())->format('%m');
        $bayi->usia = $month+$year*12;
        $bayi->save();
        // dd($bayi->all());
    	return view('kader.periksa',['bayi'=>$bayi]);
    }
    public function hasil($id)
    {
        $gizi = Gizi::find($id);
        $bayi = Bayi::where('id', $gizi->bayi_id)->get();
        foreach ($bayi as $key) {
            $vaksin = Vaksin::where('bulan', $key->usia)->get();
            if($vaksin->isEmpty()){
                $vaksin = [];
            }elseif($vaksin->isNotEmpty()){
                $vaksin;
            }
                
        }
        
         // dd($gizi, $bayi->usia);
    	return view('kader.hasil',['gizi'=>$gizi, 'bayi'=>$bayi, 'vaksin'=>$vaksin])->with('status','Data Berhasil ditambah');
    }
    public function data()
    {
        $ortu = Ortu::paginate(10);
        //dd($ortu);
        return view('kader.data',['ortu'=>$ortu]);
    }
    public function admin()
    {
        return view('kader.admin');
    }
    public function dataPeriksa()
    {
        $gizi = Gizi::orderBy('created_at', 'desc')->paginate(10);

        return view('kader.data_periksa',['gizi' => $gizi]);
    }

    public function detailGizi($id)
    {
        $gizi = Gizi::find($id);
        // dd($gizi->usia);
        $vaksin = Vaksin::where('bulan', $gizi->usia)->get();
            if($vaksin->isEmpty()){
                $vaksin = [];
            }elseif($vaksin->isNotEmpty()){
                $vaksin;
            }
        return view('kader.detail_gizi',['gizi' => $gizi, 'vaksin'=>$vaksin]);
    }

        public function showAnak()
    {
        // $tinggi = Tinggi::all();
        // $b = Berat::all();
        // dd($tinggi->all(),$b->all());
        $bayi = Bayi::orderBy('created_at','asc')->paginate(10);
        // $ortu = Ortu::where('id');
        //dd($bayi->all());
        return view('pasien.bayi',['bayi'=>$bayi]);
    }

    public function showVaksin()
    {
        $vaksin = Vaksin::orderBy('bulan', 'ASC')->paginate(10);
        // dd($vaksin);

        return view('kader.vaksin',['vaksin'=>$vaksin]);
    }

    public function tambahVaksin(Request $req)
    {
        $vaksin = new Vaksin();

        $vaksin->nama = $req->nama;
        $vaksin->bulan = $req->usia;

        $vaksin->save();
        // dd($vaksin);
        return redirect()->back()->with('status', 'Data Berhasil ditambahkan');
    }

    public function editVaksin($id)
    {
        $vaksin = Vaksin::find($id);
        // dd($vaksin);

        return view('kader.edit_vaksin',['vaksin'=>$vaksin]);
    }

    public function updateVaksin($id ,Request $req)
    {
        $vaksin = Vaksin::find($id);

        $vaksin->nama = $req->nama;
        $vaksin->bulan = $req->usia;
        // dd($vaksin);
        $vaksin->save();
        // dd($vaksin);
        return redirect('/vaksin')->with('status', 'Data Berhasil ditambahkan');
    }

    public function deletVaksin($id)
    {
         $vaksin = Vaksin::find($id);
         $vaksin->delete($vaksin);
      return redirect('/vaksin');
    }

}
