<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\thisinh;



class admin_controller extends Controller
{
    public function getdsts(){
        $thisinh = thisinh::all();

        return view('admin.thisinh.danhsachthisinh', ['thisinh' => $thisinh]);
    }
    public function editdsts(){
        return view('admin.thisinh.suathisinh');
    }
    public function deletedsts(){
        return view('admin.thisinh.xoathisinh');
    }

}
