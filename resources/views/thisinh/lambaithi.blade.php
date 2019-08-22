@extends('thisinh.master.index')

@section('lambaithi')

<div class="thi_frame">
    <div class="thi_info">
        <div>
            <div class="thi_name"><span>Tên Đề Thi: </span>{{ $dethi->tendethi }}</div>
            <div class="thi_nguoirade"><span>Người Ra Đề: </span>{{ $dethi->nguoirade->hoten }}</div>
            <div class="thi_thoigianbatdau"><span>Thời Gian Bắt Đầu: </span>{{ $bailam_new->thoigianvaothi }}</div>
            <div class="thi_thoigianlambai"><span>Thời Gian Làm Bài: </span>{{ $dethi->thoigianlambai }}</div>
            <div class="thi_socauhoi"><span>Số Lượng Câu Hỏi: </span>{{ $demcauhoi }}</div>
        </div>
        <div>
            <div class="tinhthoigianthi" id="tinhthoigianthi"></div>
            <script>

            </script>
        </div>
    </div>

<?php $i; $s = 0; $cauhoi = 0; $array = array("A", "B", "C", "D", "E");  ?>

    <div class="thi_sodo">
            <ol class="sodo">

                @for($i = 0; $i < $demcauhoi; $i++)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}">{{ $s+=1 }}</li>
                @endfor
            </ol>
            <div class="next-pre">
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        Câu Trước
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            Câu Tếp Theo
                            <span class="sr-only">Next</span>
                      </a>
                </div>
    </div>
    <div class="thi_thi">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="300000">

            <form action="thisinh/xulybaithi/{{ $dethi->id }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{ $chuoi_rand }}" name="rand">
                    <div class="carousel-inner">
                        @foreach($cauhoi_random as $ch)
                        <div class="carousel-item">
                            <div><span style="font-size: 1.3em">Câu {{ $cauhoi+=1 }}:</span><span style="font-size: 1.1em">{!! $ch->noidung !!}</span></div>
                            <?php $pp = 0; $value = 1; ?>
                            @foreach($ch->cautraloi as $tl)
                            <div class="phuonganchon form-check"><span style="padding: 5px 10px">{{ $array[$pp++] }}.</span><input class="blankCheckbox" style="margin: 0 5px 0 0;" type="radio" name="{{ $ch->id }}" value="{{ $value++ }}">{{ $tl->noidung }}</div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-lg nopbai" data-toggle="modal" data-target="#myModal">Nộp Bài</button>

                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><i class="fas fa-exclamation-triangle"></i></h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div>
                        <div class="modal-body">
                            <p>Bạn Có Muốn Nộp Bài Không?</p>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" value="OK" class="btn btn-success">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>

                    </div>
                    </div>

            </form>
          </div>
    </div>
</div>




@endsection


