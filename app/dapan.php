<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dapan extends Model
{
    protected $table = "dapan";
    public $timestamps = false;
    public function cauhoi(){
        return $this->hasOne("App\cauhoi", "id_dapan", "id");
    }
}
