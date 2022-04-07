<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;

class DokterController extends Controller
{
    public function index(){
        $user = User::where('role','dokter')->get();
        return view('dokter.index',\compact('user'));
    }

    public function add(){
        return view('dokter.add');
    }

    public function create(Request $request){

       // dd($request->all());
        $data = User::create([
            'role' =>'dokter',
            'name' => $request->name,
            'email' => $request->email,
            'keahlian' => $request->keahlian,
            'no_telpon' => $request->no_telpon,
            'password' => bcrypt('dokterdokter'),
            'remember_token' => Str::random(60)
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $data->foto= $request->file('foto')->getClientOriginalName();
            $data->save();
        }


        if($request->hasFile('thumbnail')){
            $request->file('thumbnail')->move('images/',$request->file('thumbnail')->getClientOriginalName());
            $data->thumbnail= $request->file('thumbnail')->getClientOriginalName();
            $data->save();
        }

        return Redirect('/dokter')->with('sukses','Data Berhasil Di Simpan');
    }


    public function detail($id){
        $data = User::find($id);
        return \view('profil',\compact('data'));
    }
}
