<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\cauhoi;
use App\dethi;
use App\nguoirade;
use App\ketqua;
use Illuminate\Support\Carbon;
class ajax_controller extends Controller
{
    public function danhsachcauhoi($id){
        $cauhoi = cauhoi::where('id_dethi', $id)->get();
        $dethi = dethi::where('id_nguoirade', Auth::guard('nguoirade_ds')->id())->get();
        $i = 1;
            if($id == 0){
                foreach($dethi as $dt){
                    foreach($dt->cauhoi as $ch){
                        echo "<tr>";
                        echo "<td style='text-align: center'>".$i++."</td>";
                        echo "<td style='text-align: center'>".$ch->noidung."</td>";
                        echo "<td style='text-align: center'>";
                        if($ch->mucdo == 0){
                            echo "Dể";
                        }else if($ch->mucdo == 1){
                            echo "Trung Bình";
                        }else{
                            echo "Khó";
                        }
                        echo "</td>";
                        foreach($ch->cautraloi as $tl){
                        echo "<td style='text-align: center'>".$tl->noidung."</td>";
                        }
                        echo "<td style='text-align: center'>".$ch->dapan->traloi."</td>";
                        echo "<td style='text-align: center'><a href='nguoirade/suacauhoi/".$ch->id."' class='.btn .btn-primary'><i class='fas fa-edit'></i></a></td>";
                        echo "<td style='text-align: center'><a href='' data-toggle='modal' data-target='#cauhoi".$ch->id."' class='.btn .btn-primary'><i class='fas fa-trash-alt'></i></a></td>";
                            echo "<div class='modal fade' id='cauhoi".$ch->id."' role='dialog'>
                            <div class='modal-dialog'>

                            <!-- Modal content-->
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h4 class='modal-title'><i class='fas fa-exclamation-triangle' style='color: #f1c40f;'> Cảnh Báo </i></h4>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                </div>
                                <div class='modal-body'>
                                <p>Bạn Có Muốn Xoá Câu Hỏi Này Không?  </p>
                                </div>
                                <div class='modal-footer'>
                                    <a href='nguoirade/xoacauhoi/".$ch->id."' style='padding: 8px 25px; border-radius: 5px; background-color: #c0392b; text-decoration: none; color: black;'>OK</a>
                                <button type='button' class='btn btn-default' data-dismiss='modal'>Huỷ</button>
                                </div>
                            </div>

                            </div>
                        </div>";
                        echo "</tr>";

                   }
                }
            }else{
                foreach($cauhoi as $ch){
                    echo "<tr>";
                    echo "<td style='text-align: center'>".$i++."</td>";
                    echo "<td style='text-align: center'>".$ch->noidung."</td>";
                    echo "<td style='text-align: center'>";
                    if($ch->mucdo == 0){
                        echo "Dể";
                    }else if($ch->mucdo == 1){
                        echo "Trung Bình";
                    }else{
                        echo "Khó";
                    }
                    echo "</td>";
                    foreach($ch->cautraloi as $tl){
                    echo "<td style='text-align: center'>".$tl->noidung."</td>";
                    }
                    echo "<td style='text-align: center'>".$ch->dapan->traloi."</td>";
                    echo "<td style='text-align: center'><a href='nguoirade/suacauhoi/".$ch->id."' class='.btn .btn-primary'><i class='fas fa-edit'></i></a></td>";
                    echo "<td style='text-align: center'><a href='' data-toggle='modal' data-target='#cauhoi".$ch->id."' class='.btn .btn-primary'><i class='fas fa-trash-alt'></i></a></td>";
                    echo "<div class='modal fade' id='cauhoi".$ch->id."' role='dialog'>
                    <div class='modal-dialog'>

                      <!-- Modal content-->
                      <div class='modal-content'>
                        <div class='modal-header'>
                            <h4 class='modal-title'><i class='fas fa-exclamation-triangle' style='color: #f1c40f;'>  Cảnh Báo</i></h4>
                          <button type='button' class='close' data-dismiss='modal'>&times;</button>
                        </div>
                        <div class='modal-body'>
                          <p>Bạn Có Muốn Xoá Câu Hỏi Này Không?  </p>
                        </div>
                        <div class='modal-footer'>
                            <a href='nguoirade/xoacauhoi/".$ch->id."' style='padding: 8px 25px; border-radius: 5px; background-color: #c0392b; text-decoration: none; color: black;'>OK</a>
                          <button type='button' class='btn btn-default' data-dismiss='modal'>Huỷ</button>
                        </div>
                      </div>

                    </div>
                  </div>";


                    echo "</tr>";


               }
            }
    }
    public function chondethi($id){
        //$all = dethi::all()->orderBy('id', 'desc');
        if($id == 0){
            echo "<option>Đề Thi</option>";
            foreach(dethi::all() as $dt){
                echo "<option value='".$dt->id."'>".$dt->tendethi."</option>";
            }
        }else{
            $nguoirade = nguoirade::find($id);
            $dethi = dethi::where('id_nguoirade', $nguoirade->id)->orderBy('id', 'desc')->get();
                echo "<option>Đề Thi</option>";
            foreach($dethi as $dt){
                echo "<option value='".$dt->id."'>".$dt->tendethi."</option>";
            }
        }

    }
    public function chonde($id){
        $dethi = dethi::find($id);
        echo "<div class='select_dethi'>
        <div>".$dethi->tendethi."</div>
        <div>Người Ra Đề: ".$dethi->nguoirade->hoten."</div>
        <div>Thời Gian Làm Bài: ".$dethi->thoigianlambai."</div>
        <div>Trạng Thái: ";
        if($dethi->trangthai == 0){
            echo "Đóng";
        }else{
            echo "Đang Mở";
        }
        echo "</div>
        <div>";
           if($dethi->trangthai == 1){
               echo "<form method='POST' id='madethi' action='thisinh/lambaithi/xuly/".$dethi->id."'>
                <input type='hidden' name='_token' value='".csrf_token()."'>
                <input type='hidden' id='made_re' name='made_re' value='".$dethi->id."' class='made form-control'>
                <input type='number' name='made' class='made form-control'>
                <button class='lambai'>Làm Bài <i class='fas fa-paper-plane'></i></button>
               </form>";
               echo "
                <script>
               $('#madethi').validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    'made': {
                        required: true,
                        equalTo: '#made_re'
                    }
                },
                messages: {
			    'made': {
				    required: 'Bạn Chưa Nhập Mã Đề Thi',
				    equalTo: 'Mã Đề Thi Bạn Nhập Không Chính Xác'
			        }
            }
        });

            </script>";

           }
        echo "</div>
    </div>";
    }
    public function ketquadethi($id){
        $all_dt = dethi::where('id_nguoirade', Auth::guard('nguoirade_ds')->id())->get();
        $i = 1;

       if($id == 0){
        foreach($all_dt as $dt_all){
            foreach($dt_all->ketqua as $kq_all){
                echo "<tr>
                <td>".$i++."</td>
                <td>".$kq_all->thisinh->hoten."</td>
                <td>".$kq_all->socaudung."</td>
                <td>".$kq_all->socausai."</td>
                <td>".$kq_all->diem."</td>";
                echo "</tr>";


            }
        }

       }else{
        $dethi = dethi::find($id);
        $ketqua = ketqua::where('id_dethi', $dethi->id)->orderBy('id', 'desc')->get();
           foreach($ketqua as $kq){
           echo "<tr>
           <td>".$i++."</td>
           <td>".$kq->thisinh->hoten."</td>
           <td>".$kq->socaudung."</td>
           <td>".$kq->socausai."</td>
           <td>".$kq->diem."</td>

           </tr>";

       }
       }
    }

}
