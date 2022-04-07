<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konsultasi;
use App\Jadwal;

class KonsultasiController extends Controller
{
    public function index(){
        $auth = auth()->user()->id;
        $data = Konsultasi::where('user_id',$auth)->get();
        return view('datakonsultasi',\compact('data'));
    }

    public function addkonsultasi(Request $request){
        //dd($request);

        $data = Konsultasi::create([
            'jadwal_id'=> $request->jadwal_id,
            'dokter_id'=> $request->dokter_id,
            'status'=> 'pending',
            'user_id'=> auth()->user()->id,
            'alamat'=> auth()->user()->alamat,
        ]);
        $data->save();
       return \redirect('/datakonsultasi')->with('status','Berhasil Menambahkan Data Konsultasi');
    }

    public function datakonsulpasien(){
        $auth = auth()->user()->id;
        $data = Konsultasi::where('dokter_id',$auth)->get();
        return view('konsul.index',\compact('data'));
    }

    public function updatestatus($id,$jadwal_id){
        //untuk update status konsultasi di jadwal dokter
        $coba = Jadwal::find($jadwal_id);
        if($coba->status == ''){
            $coba->update(['status' => 'konsul']); 
        }elseif($coba->status == 'konsul'){
            $coba->update(['status' => '']); 
        }
        $coba->save();

        //untuk update status konsultasi tabel konsultasi
        $data = Konsultasi::find($id);
        if($data->status == 'pending'){
            $data->update(['status' => 'konsultasi']); 
        }elseif($data->status == 'konsultasi'){
            $data->update(['status' => 'selesai']); 
        }
        $data->save();
        return Redirect()->back()->with('sukses','Data Behasil Di Update');
    }


     public function editresep($id){
        $data = Konsultasi::find($id);
        return view('konsul.editresep',['data'=>$data]);
        
    }

    public function updateresep(Request $request,$id){
        $data = Konsultasi::find($id);
        $data->update($request->all());
        if($request->hasFile('resep')){
            $request->file('resep')->move('images/',$request->file('resep')->getClientOriginalName());
            $data->resep= $request->file('resep')->getClientOriginalName();
            $data->save();
        }
        return \redirect('/datakonsultasipasien')->with('sukses','Data Behasil Di Update');

    }

    public function seluruhdatakonsul(){
        $data = Konsultasi::where('status','selesai')->get();
        return view('konsul.seluruhdatakonsul',\compact('data'));
    }


    public function inputtotalpembayaran($id){
        $data = Konsultasi::find($id);
        return view('konsul.inputtotalpembayaran',['data'=>$data]);    
    }


    public function inputtotalpembayaranupdate(Request $request,$id){
        $data = Konsultasi::find($id);
        $data->update($request->all());
        $data->save();
        return \redirect('/seluruhdatakonsul')->with('sukses','Data Behasil Di Update');

    }


    public function inputbuktipembayaran($id){
        $data = Konsultasi::find($id);
        return view('konsul.inputbuktipembayaran',['data'=>$data]);    
    }


    public function inputbuktipembayaranupdate(Request $request,$id){
        $data = Konsultasi::find($id);
        $data->update($request->all());
        if($request->hasFile('bukti_pembayaran')){
            $request->file('bukti_pembayaran')->move('images/',$request->file('bukti_pembayaran')->getClientOriginalName());
            $data->bukti_pembayaran= $request->file('bukti_pembayaran')->getClientOriginalName();
            $data->save();
        }
        return \redirect('/datakonsultasi')->with('sukses','Data Behasil Di Update');

    }

    public function updatepengiriman($id){
        $data = Konsultasi::find($id);
        if($data->status_pengiriman == ''){
            $data->update(['status_pengiriman' => 'dikirim']); 
        }elseif($data->status_pengiriman == 'dikirim'){
            $data->update(['status_pengiriman' => 'selesai']); 
        }
        $data->save();
        return Redirect()->back()->with('sukses','Data Behasil Di Update');
    }

     public function datakonsultasiselesai(){
        $data = Konsultasi::where('status_pengiriman','selesai')->get();
        return view('konsul.seluruhdatakonsulselesai',\compact('data'));
    }
    
}
