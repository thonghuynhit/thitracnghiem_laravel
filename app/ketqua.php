<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ketqua extends Model
{
    protected $table = "ketqua";
    public function dethi(){
        return $this->hasOne("App\dethi", "id_ketqua", "id");
    }
    public function thisinh(){
        return $this->belongsTo("App\thisinh", "id_thisinh", "id");
    }

}
