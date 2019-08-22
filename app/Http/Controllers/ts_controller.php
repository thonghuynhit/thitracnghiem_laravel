<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use App\nguoirade;
use App\dethi;
use App\cauhoi;
use App\bailam;
use App\tinhdiem;
use App\thisinh;
use App\ketqua;
use Illuminate\Support\Carbon;

class ts_controller extends Controller
{
    private $rand_ch;
    public function chondethi(){
        $nguoirade = nguoirade::all();
        $dethi = dethi::all();
        return view('thisinh.chondethi', compact('nguoirade', 'dethi'));
    }
    public function logout(){
        Auth::guard('thisinh_ds')->logout();
        return redirect('thisinh/login');
    }
    public function xuly_dethi($id){
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toTimeString();
        $id_ts = Auth::guard('thisinh_ds')->id();
        $bailam = new bailam;
        $bailam->id_dethi = $id;
        $bailam->id_thisinh = $id_ts;
        $bailam->thoigianvaothi = $now;
        $bailam->save();
        return view('thisinh.autosub', compact('id'));
    }
    public function lambaithi($id){
        $dethi = dethi::find($id);
        $demcauhoi = cauhoi::where('id_dethi', $dethi->id)->count();
        $cauhoi_random = cauhoi::where('id_dethi', $dethi->id)->inRandomOrder()->get();
        $rand_ch = $cauhoi_random;
        $array_rand = array();
        $i = 0;
        foreach($cauhoi_random as $ch)
        {
            $array_rand[$i++] = $ch->id;
        }
        $chuoi_rand = implode(',', $array_rand);
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toTimeString();
        $id_ts = Auth::guard('thisinh_ds')->id();
        $bailam_id_new = bailam::where('id_thisinh', $id_ts)->max('id');
        $bailam_new = bailam::find($bailam_id_new);
        return view('thisinh.lambaithi', compact('dethi', 'demcauhoi', 'bailam_new', 'cauhoi_random', 'chuoi_rand'));
    }
    public function xulybaithi(Request $req, $id){
        $dapan_ts_chon = array();
        $socauhoi = cauhoi::where('id_dethi', $id)->count();
        $cauhoi_id = cauhoi::where('id_dethi', $id)->get();
        $thisinh_id = Auth::guard('thisinh_ds')->id();
        //$thisinh = thisinh::find($thisinh_id);
        $ch_rand = $req->rand;
        $array_rand = explode (',', $ch_rand);
        $bailam_id = bailam::where('id_thisinh', $thisinh_id)->max('id');
        $i = 0; $cd = 0; $cs = 0; $ch_chon = 0;
        foreach($cauhoi_id as $chid){
            $dapan_ts_chon[$i++] = $req->input($array_rand[$ch_chon++]);
        }
        $id_ch = array();
        $s = 0;
        for($i = 0; $i < $socauhoi; $i++){
            $tinhdiem = new tinhdiem;
            $tinhdiem->id_cauhoi = $array_rand[$i];
            $tinhdiem->id_bailam = $bailam_id;
            $tinhdiem->ts_chon = $dapan_ts_chon[$i];
            $tinhdiem->save();
        }
        $ketqua = new ketqua;
        $tinhdiem_bl = tinhdiem::where('id_bailam', $bailam_id)->get();
        foreach($tinhdiem_bl as $td_bl){
            if($td_bl->cauhoi->id_dapan == $td_bl->ts_chon){
                $cd+=1;
            }else{
                $cs+=1;
            }
        }
        $diem = (10/$socauhoi)*$cd;
        $ketqua->id_thisinh = $thisinh_id;
        $ketqua->socaudung = $cd;
        $ketqua->socausai = $cs;
        $ketqua->diem = round($diem, 1);
        $ketqua->id_dethi = $id;
        $ketqua->save();
        return redirect('thisinh/ketquabaithi/'.$bailam_id);
    }
    public function ketquabaithi($id){
        $bailam = bailam::find($id);
        $kq = ketqua::where('id_thisinh', $bailam->id_thisinh)->max('id');
        $ketqua = ketqua::find($kq);
        $dethi = dethi::find($bailam->id_dethi);
        $demcauhoi = cauhoi::where('id_dethi', $dethi->id)->count();
        $chon = array("A", "B", "C", "D", "E");
        return view('thisinh.ketquavuathi', compact('bailam', 'ketqua', 'demcauhoi', 'chon'));
    }
    function random(){
        //$cauhoi = cauhoi::where('id_dethi', 23)->inRandomOrder()->get();
        //session()->forget('aaa');
        echo session('aaa');
        var_dump(session('aaa'));
        //foreach($cauhoi as $ch){
           // echo $ch->noidung;
        //}
    }
}
