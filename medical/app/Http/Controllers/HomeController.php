<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use Carbon\Carbon;
use App\Artikel;
use App\Konsultasi;
use Auth;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $data = Artikel::where('status_populer','populer')->get();
         return view('home',compact('data'));
    }

    public function konsultasi()
    {   
        $today  = Carbon::today();

         $startTime = \Carbon\Carbon::createFromFormat('H:i a', '08:00 AM');
         $endTime = \Carbon\Carbon::createFromFormat('H:i a', '11:00 AM');

         $startTime1 = \Carbon\Carbon::createFromFormat('H:i a', '11:00 AM');
         $endTime1 = \Carbon\Carbon::createFromFormat('H:i a', '02:00 PM');

         $startTime2 = \Carbon\Carbon::createFromFormat('H:i a', '02:00 PM');
         $endTime2 = \Carbon\Carbon::createFromFormat('H:i a', '05:00 PM');
         $currentTime = \Carbon\Carbon::now();

            if($currentTime->between($startTime, $endTime, true)){
                $jadwal = Jadwal::where('tanggal',$today)->
                                  where('jam_kerja','08.00 AM - 11.00 AM') 
                                  ->get();
                }elseif ($currentTime->between($startTime1, $endTime1, true)){
                    $jadwal = Jadwal::where('tanggal',$today)->
                                  where('jam_kerja','11.00 AM - 02.00 PM') 
                                  ->get();
                }elseif($currentTime->between($startTime2, $endTime2, true)){
                    $jadwal = Jadwal::where('tanggal',$today)->
                                  where('jam_kerja','02.00 PM - 05.00 PM') 
                                  ->get();
                }else{
                   return view('errorpage');
                }

         return view('konsultasi',\compact('jadwal'));
    }

    public function dashboard(){
        $jumlahpasien = User::where('role','pasien')->count();
        $jumlahdokter = User::where('role','dokter')->count();
        $datakonsulselesai = Konsultasi::where('status_pengiriman','selesai')->count();
        $datakonsulberjalan = Konsultasi::where('status','konsultasi')->count();
        return view('dashboard.index',\compact('jumlahpasien','jumlahdokter','datakonsulselesai','datakonsulberjalan'));
    }

    public function logout(){
        Auth::logout();
        return Redirect('/');
    }
}
