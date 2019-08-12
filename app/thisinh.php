<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thisinh extends Model
{
    protected $table = "thisinh";
    public $timestamps = false;
    public function ketqua(){
        return $this->hasMany("App\ketqua", "id_thisinh", "id");
    }
}
