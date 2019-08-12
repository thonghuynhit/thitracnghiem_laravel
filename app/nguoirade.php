<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nguoirade extends Model
{
    protected $table = "nguoirade";
    public $timestamps = false;
    public function dethi(){
        $this->hasMany("App\dethi", "id_nguoirade", "id");
    }
}
