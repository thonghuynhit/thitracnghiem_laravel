<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cauhoi extends Model
{
    protected $table = "cauhoi";
    public $timestamps = false;
    public function cautraloi(){
        return $this->hasMany("App\cautraloi", "id_cauhoi", "id");
    }
    public function dethi(){
        return $this->belongsTo("App\dethi", "id_dethi", "id");
    }
    public function dapan(){
        return $this->belongsTo("App\dapan", "id_dapan", "id");
    }
    public function tinhdiem(){
        return $this->hasMany('App\tinhdiem', 'id_cauhoi', 'id');
    }
}
