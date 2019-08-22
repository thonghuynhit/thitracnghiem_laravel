@extends('thisinh.master.index')
@section('ketquavuathi')
<div class="kq_baithi">
    <div>Kết Quả Kỳ Thi</div>
    <table>
        <tr>
            <td>Tên Đề Thi: </td>
            <td>{{ $bailam->dethi->tendethi }}</td>
        </tr>
        <tr>
            <td>Thời Gian Bắt Đầu:</td>
            <td>{{ $bailam->thoigianvaothi }}</td>
        </tr>
        <tr>
            <td>Số Câu Đúng:</td>
            <td>{{ $ketqua->socaudung }}</td>
        </tr>
        <tr>
            <td>Số Câu Sai:</td>
            <td>{{ $ketqua->socausai }}</td>
        </tr>
        <tr>
            <td>Điểm Bài Thi:</td>
            <td>{{ $ketqua->diem }}</td>
        </tr>
        <tr>
            <td>Xếp Loại Bài Thi</td>
            <td>
                @if($ketqua->diem < 3)
                    Kém
                @elseif($ketqua->diem < 5)
                    Yếu
                @elseif($ketqua->diem < 6.5)
                    Trung Bình
                @elseif($ketqua->diem < 8.5)
                    Khá
                @elseif($ketqua->diem < 9.5)
                    Giỏi
                @else
                    Xuất Sắc
                @endif
            </td>
        </tr>
    </table>
</div>
<div class="xemketqua">
    <div>
        <a href="trangchu"><i class="fas fa-arrow-left"></i> Trang Chủ</a>
        <a href="" class="xem_kq">Xem Kết Quả <i class="fas fa-eye"></i></a>
    </div>
    <?php $i = 0; $n = 0; ?>
    <div class="ds_ketqua">
        @foreach($bailam->tinhdiem as $td)
            <div class="ds_nd"><span>{{ $n+=1 }}.</span>{!! $td->cauhoi->noidung !!}</div>
            <?php $value = 0;$c = 0; $s = 1; ?>
            @foreach($td->cauhoi->cautraloi as $tl)
            <div
                @if($s == $td->cauhoi->id_dapan)
                id='istrue'
                @endif
            class="ds_tl"><span style="padding: 0 8px 0 15px;">{{ $chon[$c++] }}</span><input data="{{ $s++ }}" style="margin-right: 10px;" type="radio" name="{{ $td->cauhoi->id }}" value="{{ $value++ }}"
                @if($value == $td->ts_chon)
                    checked
                @endif
                >{{ $tl->noidung }}</div>
            @endforeach
        @endforeach

    </div>
</div>
@endsection
