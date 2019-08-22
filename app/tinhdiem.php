<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tinhdiem extends Model
{
    protected $table = "tinhdiem";
    public $timestamps = false;
    public function cauhoi(){
        return $this->belongsTo('App\cauhoi', 'id_cauhoi', 'id');
    }
    public function bailam(){
        return $this->belongsTo('App\bailam', 'id_bailam', 'id');
    }
    public function dapan(){
        return $this->belongsTo("App\dapan", "ts_chon", "id");
    }
}
