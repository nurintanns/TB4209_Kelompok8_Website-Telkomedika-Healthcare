<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    protected $table = 'konsultasi';

    protected $guarded;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function jadwal(){
        return $this->belongsTo(Jadwal::class);
    }

     public function gambarresep(){
        return !$this->resep ? 'TIdak ada' : asset('images/'.$this->resep);
    }

     public function gambarpembayaran(){
        return !$this->bukti_pembayaran ? 'Tidak ada' : asset('images/'.$this->bukti_pembayaran);
    }




    

}
