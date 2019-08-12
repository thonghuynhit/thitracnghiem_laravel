<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ketqua extends Model
{
    protected $table = "ketqua";
    public $timestamps = false;
    public function dethi(){
        return $this->belongsTo("App\dethi", "id_dethi", "id");
    }
    public function thisinh(){
        return $this->belongsTo("App\\thisinh", "id_thisinh", "id");
    }

}
