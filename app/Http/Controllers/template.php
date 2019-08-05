<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\thisinh_ds;
use App\admin_ds;
use App\nguoirade_ds;

class template extends Controller
{
    public function trangchu(){
        return view('trangchu');
    }
    public function getlogints(){
        return view('login_thisinh');
    }
    public function postlogints(Request $req){
        $un = $req->un_ts;
        $pw = $req->pw_ts;
        if(Auth::guard('thisinh_ds')->attempt(['email'=> $un, 'password' => $pw])){
            echo "thanh cong";
        }else{
            return redirect()->route('templatets');
        }

    }

    public function getloginad(){
        return  view('login_admin');
    }
    public function postloginad(Request $req){
        $un = $req->un_ad;
        $pw = $req->pw_ad;
        if(Auth::guard('admin_ds')->attempt(['email' => $un, 'password' => $pw]))
        {
            echo "thanh cong"."<br>";
            echo $un." + ".$pw;

        }else{
            echo "that bai";
        }

    }



    public function getloginrd(){
        return view('login_nguoirade');
    }
    public function postloginrd(Request $req){
        $un = $req->un_rd;
        $pw = $req->pw_rd;
        if(Auth::guard('nguoirade_ds')->attempt(['email' => $un, 'password' => $pw]))
        {
            echo "thanh cong";
        }else{
            echo "that bai";
        }
    }
}