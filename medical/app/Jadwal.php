<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = "jadwal";

    protected $guarded;

     public function user(){
        return $this->belongsTo(User::class);
    }

}
