<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use Carbon\Carbon;

class ArtikelController extends Controller
{
    public function index(){
        $data = Artikel::all();
        return view('artikel.index',\compact('data'));
    }

    public function add(){
        return view('artikel.add');
    }

    public function create(Request $request){
        //dd($request->all());
        $data = Artikel::create([
            'judul'=> $request->judul,
            'deskripsi'=> $request->deskripsi,
            'isi'=> $request->isi,
            'status'=> 'pending',
            'status_populer'=> 'tidak_populer',
            'user_id'=> auth()->user()->id,
        ]);
        if($request->hasFile('thumbnail')){
            $request->file('thumbnail')->move('images/',$request->file('thumbnail')->getClientOriginalName());
            $data->thumbnail= $request->file('thumbnail')->getClientOriginalName();
            $data->save();
        }
        return redirect('/artikel')->with('sukses','Data Behasil Diinput');
    }

    public function updatestatus($id){
        $data = Artikel::find($id);
        if ($data->status == 'pending') {
            $data->update(['status' => 'publish']);
        }elseif ($data->status == 'publish') {
            $data->update(['status' => 'pending']);
        }
        $data->save();
        return Redirect()->back()->with('sukses','Data Behasil Di Update');

    }


     public function updatestatuspopuler($id){
        $data = Artikel::find($id);
        if ($data->status_populer == 'populer') {
            $data->update(['status_populer' => 'tidak_populer']);
        }elseif ($data->status_populer == 'tidak_populer') {
            $data->update(['status_populer' => 'populer']);
        }
        $data->save();
        return Redirect()->back()->with('sukses','Data Behasil Di Update');

    }



    public function edit($id){
        $data = Artikel::find($id);
        return view('artikel.edit',\compact('data'));
    }

    public function update(Request $request,$id){
        $data = Artikel::find($id);
        $data->update($request->all());
        if($request->hasFile('thumbnail')){
            $request->file('thumbnail')->move('images/',$request->file('thumbnail')->getClientOriginalName());
            $data->thumbnail= $request->file('thumbnail')->getClientOriginalName();
            $data->save();
        }
        return \redirect('/artikel')->with('sukses','Data Behasil Di Update');
    }

    public function delete($id){
        $data = Artikel::find($id);
        $data->delete($data);
        return redirect('/artikel')->with('sukses','Data Behasil Di Hapus');
    }

    public function detail($id){
        $data = Artikel::find($id);
        return view('artikel.detail',\compact('data'));
    }


    public function artikelhome(Request $request){

             $today  = Carbon::today();

            // $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', '2020-11-5 3:30:34');
            // $diff_in_days = $to->diffInDays($today);
            // $kamu = 30-$diff_in_days;
            //  dd($kamu);

           


        if($request->has('cari')){
            $data = Artikel::latest()->where('status','publish')->where('judul','LIKE','%'.$request->cari.'%')->get();
            
        }else{
            $data = Artikel::latest()->where('status','publish')->get();
            
            
            
            foreach ($data as $value) {
            $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $value->created_at);
        
            }
            $diff_in_days = $to->diffInDays($today);
            $kamu = 30-$diff_in_days;
            //dd($kamu);
           
           

            
        }
        return view('artikel',\compact('data'));
    }
}
