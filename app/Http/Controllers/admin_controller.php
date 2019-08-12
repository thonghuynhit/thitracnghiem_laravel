<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\thisinh;
use App\admin;
use App\nguoirade;
use App\dethi;
use App\cauhoi;
use App\dapan;
use App\ketqua;
use App\cautraloi;



class admin_controller extends Controller
{
    #--- thisinh -----
    public function getdsts(){
        $thisinh = thisinh::all();

        return view('admin.thisinh.danhsachthisinh', ['thisinh' => $thisinh]);
    }
    public function geteditdsts($id){
        $thisinh = thisinh::find($id);
        //echo $thisinh->hoten;
        return view('admin.thisinh.suathisinh', compact('thisinh'));
    }
    public function posteditdsts(Request $req, $id){
        $thisinh = thisinh::find($id);
        $this->validate($req, [
            'hoten' => 'required|min:6|max:40',
            'email' => 'required|unique:thisinh,email',
            'ngaysinh' => 'required',
            'diachi' => 'required',
        ], [
            'hoten.required' => 'Bạn Chưa Nhập Họ Tên',
            'hoten.min' => 'Họ Tện Phải Trên 6 Kí Tự',
            'hoten.max' => 'Họ Tên Quá Dài',
            'email.required' => 'Bạn Chưa Nhập Email',
            'email.unique' => 'Email Đã Tồn Tại',
            'ngaysinh.required' => 'Ngày Sinh Không Được Để Trống',
            'diachi.required' => 'Bạn Chưa Nhập Địa Chỉ',
        ]);
        $hoten = $req->hoten;
        $ngaysinh = $req->ngaysinh;
        $gioitinh = $req->gioitinh;
        $email = $req->email;
        $diachi = $req->diachi;
        $matkhau = $req->password;

        $thisinh->hoten = $hoten;
        $thisinh->ngaysinh = $ngaysinh;
        $thisinh->gioitinh = $gioitinh;
        $thisinh->email = $email;
        $thisinh->diachi = $diachi;
        $thisinh->password = bcrypt($matkhau);
        $thisinh->save();
        return redirect('admin/suadsthisinh/'.$id)->with('thongbao', 'Sửa Thành Công');
    }
    public function deletedsts($id){
        $thisinh = thisinh::find($id);
        $thisinh->delete();
        return redirect('admin/dsthisinh');
    }
    public function getaddts(){
        return view('admin.thisinh.themthisinh');
    }
    public function postaddts(Request $req){
        $this->validate($req, [
            'hoten' => 'required|min:6|max:40',
            'email' => 'required|unique:thisinh,email',
            'ngaysinh' => 'required',
            'diachi' => 'required',
        ], [
            'hoten.required' => 'Bạn Chưa Nhập Họ Tên',
            'hoten.min' => 'Họ Tện Phải Trên 6 Kí Tự',
            'hoten.max' => 'Họ Tên Quá Dài',
            'email.required' => 'Bạn Chưa Nhập Email',
            'email.unique' => 'Email Đã Tồn Tại',
            'ngaysinh.required' => 'Ngày Sinh Không Được Để Trống',
            'diachi.required' => 'Bạn Chưa Nhập Địa Chỉ',
        ]);

        $hoten = $req->hoten;
        $ngaysinh = $req->ngaysinh;
        $gioitinh = $req->gioitinh;
        $email = $req->email;
        $diachi = $req->diachi;
        $matkhau = $req->password;

        $thisinh = new thisinh;
        $thisinh->hoten = $hoten;
        $thisinh->ngaysinh = $ngaysinh;
        $thisinh->gioitinh = $gioitinh;
        $thisinh->email = $email;
        $thisinh->diachi = $diachi;
        $thisinh->password = bcrypt($matkhau);
        $thisinh->save();
        return redirect('admin/themthisinh')->with('thongbao', 'Thêm Thành Công');
    }



    #---- admin---
    public function getdsad(){
        $admin = admin::all();
        return view('admin.admin.danhsachadmin', compact('admin'));
    }
    public function geteditadmin($id){
        $admin = admin::find($id);
        return view('admin.admin.suaadmin', compact('admin'));
    }
    public function posteditadmin(Request $req, $id){
        $admin = admin::find($id);
        $hoten = $req->hoten;
        $email = $req->email;
        $diachi = $req->diachi;
        $password = $req->password;
        $this->validate($req, [
            'hoten' => 'required|min:6|max:40',
            'email' => 'required|unique:admin,email',
            'diachi' => 'required',
            'password' => 'required|min:4|max:15'
        ], [
            'hoten.required' => 'Bạn Chưa Nhập Họ Tên',
            'hoten.min' => 'Họ Tên Quá Ngắn',
            'hoten.max' => 'Họ Tên Quá Dài',
            'email.required' => 'Bạn Chưa Nhập Email',
            'email.unique' => 'Email Đã Tồn Tại',
            'diachi.required' => 'Bạn Chưa Nhập Địa Chỉ',
            'password.required' => 'Bạn Chưa Nhập Mật Khẩu'
        ]);

        $admin->hoten = $hoten;
        $admin->email = $email;
        $admin->diachi = $diachi;
        $admin->password = bcrypt($password);
        $admin->save();

        return redirect('admin/suadsadmin/'.$id)->with('thongbao', 'Sửa Admin Thành Công');

    }
    public function deleteadmin($id){
        $admin = admin::find($id);
        $admin->delete();
        return redirect('admin/dsadmin');
    }
    public function getaddadmin(){
        return view('admin.admin.themadmin');

    }
    public function postaddadmin(Request $req){
        $admin = new admin;
        $hoten = $req->hoten;
        $email = $req->email;
        $diachi = $req->diachi;
        $password = $req->password;
        $this->validate($req, [
            'hoten' => 'required|min:6|max:40',
            'email' => 'required|unique:admin,email',
            'diachi' => 'required',
            'password' => 'required|min:4|max:15'
        ], [
            'hoten.required' => 'Bạn Chưa Nhập Họ Tên',
            'hoten.min' => 'Họ Tên Quá Ngắn',
            'hoten.max' => 'Họ Tên Quá Dài',
            'email.required' => 'Bạn Chưa Nhập Email',
            'email.unique' => 'Email Đã Tồn Tại',
            'diachi.required' => 'Bạn Chưa Nhập Địa Chỉ',
            'password.required' => 'Bạn Chưa Nhập Mật Khẩu'
        ]);
            $admin->hoten = $hoten;
            $admin->email = $email;
            $admin->password = bcrypt($password);
            $admin->diachi = $diachi;
            $admin->save();
            return redirect('admin/themadmin')->with('thongbao', 'Thêm Admin Thành Công');

    }

    #--- nguoirade----

    public function getdsrd(){
        $nguoirade = nguoirade::all();
        return view('admin.nguoirade.danhsachnguoirade', compact('nguoirade'));
    }
    public function geteditrd($id){
        $nguoirade = nguoirade::find($id);
        return view('admin.nguoirade.suanguoirade', compact('nguoirade'));
    }
    public function posteditrd(Request $req, $id){
        $nguoirade = nguoirade::find($id);

        $this->validate($req, [
            'hoten' => 'required|min:6|max:40',
            'email' => 'required|unique:nguoirade,email',
            'diachi' => 'required',
            'ngaysinh' => 'required',
            'password' => 'required|min:4|max:15',
        ], [
            'hoten.required' => 'Bạn Chưa Nhập Họ Tên',
            'hoten.min' => 'Họ Tện Phải Trên 6 Kí Tự',
            'hoten.max' => 'Họ Tên Quá Dài',
            'email.required' => 'Bạn Chưa Nhập Email',
            'email.unique' => 'Email Đã Tồn Tại',
            'ngaysinh.required' => 'Ngày Sinh Không Được Để Trống',
            'diachi.required' => 'Bạn Chưa Nhập Địa Chỉ',
            'password.required' => 'Bạn Chưa Nhập Mật Khẩu',
            'password.min' => 'Mật Khẩu Quá Ngắn',
            'password.max' => 'Mật Khẩu Quá Dài'
        ]);
        $hoten = $req->hoten;
        $ngaysinh = $req->ngaysinh;
        $gioitinh = $req->gioitinh;
        $email = $req->email;
        $diachi = $req->diachi;
        $password = $req->password;

        $nguoirade->hoten = $hoten;
        $nguoirade->ngaysinh = $ngaysinh;
        $nguoirade->gioitinh = $gioitinh;
        $nguoirade->email = $email;
        $nguoirade->diachi = $diachi;
        $nguoirade->password = bcrypt($password);
        $nguoirade->save();

        return redirect('admin/suadsnguoirade/'.$id)->with('thongbao', 'Sửa Người Ra Đề Thành Công');

    }
    public function deleterd($id){
        $nguoirade = nguoirade::find($id);
        $nguoirade->delete();
        return redirect('admin/dsnguoirade');
    }
    public function getaddrd(){
        return view('admin.nguoirade.themnguoirade');
    }
    public function postaddrd(Request $req){
        $nguoirade = new nguoirade;
        $hoten = $req->hoten;
        $ngaysinh = $req->ngaysinh;
        $gioitinh = $req->gioitinh;
        $email = $req->email;
        $diachi = $req->diachi;
        $password = $req->password;

        $this->validate($req, [
            'hoten' => 'required|min:6|max:40',
            'email' => 'required|unique:nguoirade,email',
            'diachi' => 'required',
            'ngaysinh' => 'required',
            'password' => 'required|min:4|max:15',
        ], [
            'hoten.required' => 'Bạn Chưa Nhập Họ Tên',
            'hoten.min' => 'Họ Tện Phải Trên 6 Kí Tự',
            'hoten.max' => 'Họ Tên Quá Dài',
            'email.required' => 'Bạn Chưa Nhập Email',
            'email.unique' => 'Email Đã Tồn Tại',
            'diachi.required' => 'Bạn Chưa Nhập Địa Chỉ',
            'ngaysinh.required' => 'Ngày Sinh Không Được Để Trống',
            'password.required' => 'Bạn Chưa Nhập Mật Khẩu',
            'password.min' => 'Mật Khẩu Quá Ngắn',
            'password.max' => 'Mật Khẩu Quá Dài'
        ]);
        $nguoirade->hoten = $hoten;
        $nguoirade->ngaysinh = $ngaysinh;
        $nguoirade->gioitinh = $gioitinh;
        $nguoirade->email = $email;
        $nguoirade->diachi = $diachi;
        $nguoirade->password = bcrypt($password);
        $nguoirade->save();
        return redirect('admin/themnguoirade')->with('thongbao', 'Thêm Người Ra Đề Thành Công');
    }

    #------ de thi --------

    public function getdethi(){
        $dethi = dethi::all();
        return view('admin.dethi.danhsachdethi', compact('dethi'));
    }
    public function geteditdethi($id){
        $dethi = dethi::find($id);
        return view('admin.dethi.suadethi', compact('dethi'));
    }
    public function posteditdethi(Request $req, $id){
        $dethi = dethi::find($id);
        $tendethi = $req->tendethi;
        $thoigianbatdau = $req->thoigianbatdau;
        $thoigianketthuc = $req->thoigianketthuc;
        $thoigianlambai = $req->thoigianlambai;
        $trangthai = $req->trangthai;
        $this->validate($req, [
            'tendethi' => 'required|min:6|max:150'
        ], [
            'tendethi.required' => 'Bạn Chưa Nhập Tên Đề Thi',
            'tendethi.min' => 'Tên Đề Thi Quá Ngắn',
            'tendethi.max' => 'Tên Đề Thi Quá Dài'
        ]);
        $dethi->tendethi = $tendethi;
        $dethi->thoigianbatdau = $thoigianbatdau;
        $dethi->thoigianketthuc = $thoigianketthuc;
        $dethi->thoigianlambai = $thoigianlambai;
        $dethi->trangthai = $trangthai;
        $dethi->save();
        return redirect('admin/dethi/suadethi/'.$id)->with('thongbao', 'Sửa Đề Thi Thành Công');
    }
    public function deletedethi($id){

    }
    public function getcauhoi($id){
        $dethi_ch = dethi::find($id);
        return view('admin.dethi.danhsachcauhoi', compact('dethi_ch'));
    }
    public function geteditcauhoi($id){
        $cauhoi = cauhoi::find($id);
        $cautraloi = cautraloi::where('id_cauhoi', $id)->get();
        return view('admin.dethi.suacauhoi', compact('cauhoi', 'cautraloi'));
    }
    public function posteditcauhoi(Request $req, $id){
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
            $cauhoi->dapan->save();
            return redirect('admin/dethi/suacauhoi/'.$id)->with('thongbao', 'Sửa Câu Hỏi Thành Công');
    }
    public function deletecauhoi($id){
        $cauhoi = cauhoi::find($id);
        $id_dethi = $cauhoi->id_dethi;
        $cautraloi = cautraloi::where('id_cauhoi', $id)->delete();
        $cauhoi->delete();
        return redirect('admin/dethi/dscauhoi/'.$id_dethi);
    }
    public function dsketqua($id){
        $dethi = dethi::find($id);
        return view('admin.dethi.danhsachdiemthi', compact('dethi'));
    }
    public function geteditdiemthi($id){
        $ketqua = ketqua::find($id);
        return view('admin.dethi.suadiemthi', compact('ketqua'));
    }
    public function posteditdiemthi(Request $req, $id){
        $ketqua = ketqua::find($id);
        $socaudung = $req->socaudung;
        $socausai = $req->socausai;
        $diemthi = $req->diemthi;
        $this->validate($req, [
            'socaudung' => 'required|max:100|numeric',
            'socausai' => 'required|max:100|numeric',
            'diemthi' => 'required|max:10|numeric'
        ], [
            'socaudung.required' => 'Bạn Chưa Nhập Số Câu Đúng',
            'socaudung.max' => 'Bạn Nhập Số Câu Đúng Không Hợp Lệ',
            'socaudung.numberic' => 'Bạn Nhập Số Câu Đúng Không Hợp Lệ 1',
            'socausai.required' => 'Bạn Chưa Nhập Số Câu Sai',
            'socausai.max' => 'Bạn Nhập Số Câu Sai Không Hợp Lệ',
            'socausai.numberic' => 'Bạn Nhập Số Câu Sai Không Hợp Lệ 1',
            'diemthi.required' => 'Bạn Chưa Nhập Điểm Thi',
            'diemthi.max' => 'Bạn Nhập Điểm Thi Không Hợp Lệ',
            'diemthi.numberic' => 'Bạn Nhập Điểm Thi Không Hợp Lệ 1',
        ]);
        $ketqua->socaudung = $socaudung;
        $ketqua->socausai = $socausai;
        $ketqua->diem = $diemthi;
        $ketqua->save();
        return redirect('admin/dethi/suadiemthi/'.$id)->with('thongbao', 'Sửa Kết Quả Thi Thành Công');
    }
    public function deletediemthi($id){
        $ketqua = ketqua::find($id);
        $ketqua->delete();
        return redirect('admin/dethi/ketquathi/'.$ketqua->id_dethi);
    }
}
