<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PasienController extends Controller
{
    public function index(){
        $user = User::where('role','pasien')->get();
        return view('pasien.index',\compact('user'));
    }

    public function detail($id){
        $data = User::find($id);
        return \view('pasien.profil',\compact('data'));
    }
}
