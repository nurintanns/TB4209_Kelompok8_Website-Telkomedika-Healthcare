<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Jadwal;

class JadwalKonsulController extends Controller
{
    public function jadwalkonsul(){
        $dokter = auth()->user();
        $dokter_id =$dokter->id;
        $data = Jadwal::where('user_id',$dokter_id)->get(); 
        return view('jadwal.index',\compact('data'));
    }

    public function add(){
        return \view('jadwal.add');
    }

    public function create(Request $request){
         $jadwal = Jadwal::create([
            'tanggal'=> $request->tanggal,
            'jam_kerja'=> $request->jam_kerja,
            'user_id'=> auth()->user()->id,
        ]);
        $jadwal->save();
        return Redirect('/jadwalkonsul')->with('sukses','Data Berhasil Di Simpan');
    }
}

