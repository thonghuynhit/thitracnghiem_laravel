<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bailam extends Model
{
    protected $table = "bailam";
    public $timestamps = false;
    public function dethi(){
        return $this->belongsTo('App\dethi', 'id_dethi', 'id');
    }
    public function thisinh(){
        return $this->belongsTo('App\thisinh', 'id_thisinh', 'id');
    }
    public function tinhdiem(){
        return $this->hasMany('App\tinhdiem', 'id_bailam', 'id');
    }
}
