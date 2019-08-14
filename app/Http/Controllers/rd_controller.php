<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\nguoirade;
use App\dethi;
use App\cauhoi;
use App\cautraloi;

class rd_controller extends Controller
{
    public function danhsachdethi(){
        $dethi = dethi::where('id_nguoirade', Auth::guard('nguoirade_ds')->id())->get();
        return view('nguoirade.danhsachdethi', compact('dethi'));
    }
    public function getsuadethi($id){
        $dethi = dethi::find($id);
        return view('nguoirade.suadethi', compact('dethi'));
    }
    public function postsuadethi(Request $req, $id){
        $dethi = dethi::find($id);
        $this->validate($req, [
            'tendethi' => 'required|min:6|max:150',
            'thoigianbatdau' => 'required',
            'thoigianketthuc' => 'required',
            'thoigianlambai' => 'required'
        ], [
            'tendethi.required' => 'Bạn Chưa Nhập Tện Đề Thi',
            'tendethi.min' => 'Tên Đề Thi Quá Ngắn',
            'tendethi.max' => 'Tên Đề Thi Quá Dài',
            'thoigianbatdau.required' => 'Bạn Chưa Chọn Thời Gian Bắt Đầu',
            'thoigianketthuc.required' => 'Bạn Chưa Chọn Thời Gian Kết Thúc',
            'thoigianlambai.required' => 'Bạn Chưa Chọn Thời Gian Làm Bài'
        ]);
        $dethi->tendethi = $req->tendethi;
        $dethi->thoigianbatdau = $req->thoigianbatdau;
        $dethi->thoigianketthuc = $req->thoigianketthuc;
        $dethi->thoigianlambai = $req->thoigianlambai;
        $dethi->trangthai = $req->trangthai;
        $dethi->save();
        return redirect('nguoirade/suadethi/'.$id)->with('thongbao', 'Sửa Đề Thi Thành Công');
    }
    public function xoadethi($id){
        $dethi = dethi::find($id);
        $dethi->delete();
        return redirect('nguoirade/danhsachdethi');
    }
    public function getthemdethi(){
        return view('nguoirade.themdethi');
    }
    public function postthemdethi(Request $req){
        $dethi = new dethi;
        $this->validate($req, [
            'tendethi' => 'required|min:6|max:150',
            'thoigianlambai' => 'required',
            'thoigianbatdau' => 'required',
            'thoigianketthuc' => 'required'
        ], [
            'tendethi.required' => 'Bạn Chưa Nhập Tên Đề Thi',
            'tendethi.min' => 'Tên Đề Thi Quá Ngắn',
            'tendethi.max' => 'Tên Đề Thi Quá Dài',
            'thoigianlambai.required' => 'Bạn Chưa Chon Thời Gian Làm Bài',
            'thoigianbatdau.required' => 'Bạn Chưa Chon Thời Gian Bắt Đầu Kì Thì',
            'thoigianketthuc.required' => 'Bạn Chưa Chon Thời Gian Kết Thúc Kì Thi'
        ]);
        $tendethi = $req->tendethi;
        $thoigianbatdau = $req->thoigianbatdau;
        $thoigianketthuc = $req->thoigianketthuc;
        $thoigianlambai = $req->thoigianlambai;
        $trangthai = $req->trangthai;

        $dethi->tendethi = $tendethi;
        $dethi->thoigianbatdau = $thoigianbatdau;
        $dethi->thoigianketthuc = $thoigianketthuc;
        $dethi->thoigianlambai = $thoigianlambai;
        $dethi->id_nguoirade = Auth::guard('nguoirade_ds')->id();
        $dethi->trangthai = $trangthai;
        $dethi->save();
        $id_cauhoi = dethi::where('id_nguoirade', Auth::guard('nguoirade_ds')->id())->max('id');
            return redirect('nguoirade/themcauhoi/'.$id_cauhoi)->with('thongbao', 'Thêm Đề Thi Thành Công');
    }
    public function getthemcauhoi($id){
        $id_dt = $id;
        return view('nguoirade.themcauhoi', ['id' => $id_dt]);
    }
    public function postthemcauhoi(Request $req, $id){
        $this->validate($req, [
            'noidung' => 'required|min:6',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required'
        ], [
            'noidung.required' => 'Bạn Chưa Nhập Nội Dung Câu Hỏi',
            'noidung.min' => 'Nội Dung Câu Hỏi Quá Ngắn',
            'a.required' => 'Bạn Chưa Nhập Phương Án A',
            'b.required' => 'Bạn Chưa Nhập Phương Án B',
            'c.required' => 'Bạn Chưa Nhập Phương Án C',
            'd.required' => 'Bạn Chưa Nhập Phương Án D',
        ]);
        $cauhoi = new cauhoi;
        $cauhoi->noidung = $req->noidung;
        $cauhoi->mucdo = $req->mucdo;
        $cauhoi->id_dethi = $id;
        $cauhoi->id_dapan = $req->dapandung;
        $cauhoi->save();
        $id_ch = cauhoi::where('id_dethi', $id)->max('id');
        $cautraloia = new cautraloi;
        $cautraloib = new cautraloi;
        $cautraloic = new cautraloi;
        $cautraloid = new cautraloi;

        $cautraloia->noidung = $req->a;
        $cautraloia->id_cauhoi = $id_ch;
        $cautraloib->noidung = $req->b;
        $cautraloib->id_cauhoi = $id_ch;
        $cautraloic->noidung = $req->c;
        $cautraloic->id_cauhoi = $id_ch;
        $cautraloid->noidung = $req->d;
        $cautraloid->id_cauhoi = $id_ch;

        $cautraloia->save();
        $cautraloib->save();
        $cautraloic->save();
        $cautraloid->save();
        return redirect('nguoirade/themcauhoi/'.$id)->with('thongbao', 'Thêm Câu Hỏi Thành Công');
    }
    public function danhsachcauhoi(){
        $dethi = dethi::where('id_nguoirade', Auth::guard('nguoirade_ds')->id())->get();
        return view('nguoirade.danhsachcauhoi', compact('dethi'));
    }
    public function getsuacauhoi($id){
        $cauhoi = cauhoi::find($id);
        $cautraloi = cautraloi::where('id_cauhoi', $id)->get();
        return view('nguoirade.suacauhoi', compact('cauhoi', 'cautraloi'));
    }
    public function postsuacauhoi(Request $req, $id){
        $cauhoi = cauhoi::find($id);
        $noidung = $req->noidung;
        $mucdo = $req->mucdo;
        $phuongan = array($req->a, $req->b, $req->c, $req->d);
        $gettraloi = array();
        $i = 0;
        $dapandung = $req->dapandung;
        $this->validate($req, [
            'noidung' => 'required|min:4',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
        ], [
            'noidung.required' => 'Bạn Chưa Nhập Nội Dung Câu Hỏi',
            'noidung.min' => 'Nội Dung Câu Hỏi Quá Ngắn',
            'a.required' => 'Bạn Chưa Nhập Phương Án A',
            'b.required' => 'Bạn Chưa Nhập Phương Án B',
            'c.required' => 'Bạn Chưa Nhập Phương Án C',
            'd.required' => 'Bạn Chưa Nhập Phương Án D',
        ]);
            $cauhoi->noidung = $noidung;
            $cauhoi->mucdo = $mucdo;
            foreach($cauhoi->cautraloi as $tl){
                $gettraloi[$i++] = $tl->id;
            }
            $cautraloi1 = cautraloi::find($gettraloi[0]);
            $cautraloi2 = cautraloi::find($gettraloi[1]);
            $cautraloi3 = cautraloi::find($gettraloi[2]);
            $cautraloi4 = cautraloi::find($gettraloi[3]);
            $cautraloi1->noidung = $phuongan[0];
            $cautraloi2->noidung = $phuongan[1];
            $cautraloi3->noidung = $phuongan[2];
            $cautraloi4->noidung = $phuongan[3];
            $cautraloi1->save();
            $cautraloi2->save();
            $cautraloi3->save();
            $cautraloi4->save();
            $cauhoi->id_dapan = $dapandung;
            $cauhoi->save();
            return redirect('nguoirade/danhsachcauhoi');
    }
    public function xoacauhoi($id){
        $cauhoi = cauhoi::find($id);
        cautraloi::where('id_cauhoi', $cauhoi->id)->delete();
        $cauhoi->delete();
        return redirect('nguoirade/danhsachcauhoi');
    }
}
