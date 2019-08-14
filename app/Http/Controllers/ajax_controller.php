<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\cauhoi;
use App\dethi;

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
                        echo "<td style='text-align: center'><a href='nguoirade/xoacauhoi/".$ch->id."' class='.btn .btn-danger'><i class='fas fa-trash-alt'></i></a></td>";

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
                    echo "<td style='text-align: center'><a href='nguoirade/xoacauhoi/".$ch->id."' class='.btn .btn-danger'><i class='fas fa-trash-alt'></i></a></td>";

                    echo "</tr>";

               }
            }
    }

}
