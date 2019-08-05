<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dapan extends Model
{
    protected $table = "dapan";
    public function cauhoi(){
        return $this->hasOne("App\cauhoi", "id_dapan", "id");
    }
}
