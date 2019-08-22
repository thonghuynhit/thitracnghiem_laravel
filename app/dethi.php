<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dethi extends Model
{
    protected $table = "dethi";
    public $timestamps = false;
    public function nguoirade(){
        return $this->belongsTo("App\\nguoirade", "id_nguoirade", "id");
    }
    public function cauhoi(){
        return $this->hasMany("App\cauhoi", "id_dethi", "id");
    }
    public function ketqua(){
        return $this->hasMany("App\ketqua", "id_dethi", "id");
    }
    public function bailam(){
        return $this->hasMany('App\bailam', 'id_dethi', 'id');
    }


}
