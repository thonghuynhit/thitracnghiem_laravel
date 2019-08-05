<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dethi extends Model
{
    protected $table = "dethi";
    public function nguoirade(){
        return $this->belongsTo("App\nguoirade", "id_nguoirade", "id");
    }
    public function cauhoi(){
        return $this->hasMany("App\cauhoi", "id_dethi", "id");
    }
    public function ketqua(){
        return $this->belongsTo("App\ketqua", "id_ketqua", "id");
    }


}
