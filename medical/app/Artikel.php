<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table ='artikel';
     protected $dates = ['created_at'];
    protected $guarded;

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function gambar(){
        return !$this->thumbnail? asset('images/no-thumbnail.png') : asset('images/'.$this->thumbnail);
    }
    
}
