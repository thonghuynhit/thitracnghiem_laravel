<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cautraloi extends Model
{
    protected $table = "cautraloi";
    public function cautraloi(){
        return $this->belongsTo("App\cauhoi", "id_cauhoi", "id");
    }
}
