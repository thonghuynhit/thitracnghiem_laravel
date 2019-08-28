@extends('thisinh.master.index')
@section('ketquathi')
<div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Trang Chủ</a>
            </li>
            <li class="breadcrumb-item active">Kết Quả Thi</li>
          </ol>

          <!-- Icon Cards-->


          <!-- Area Chart Example-->

          <?php $stt = 0; ?>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Danh Sách Kết Quả Thi</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Tên Đề Thi</th>
                      <th>Số Câu Đúng</th>
                      <th>Số Câu Sai</th>
                      <th>Điểm Bài Thi</th>
                      <th>Xếp Loại</th>

                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>

                    </tr>
                  </tfoot>
                  <tbody>


                      @foreach ($ketqua as $kq)
                      <tr>
                        <td style="text-align: center">{{ $stt+= 1 }}</td>
                        <td style="text-align: center">{{ $kq->dethi->tendethi }}</td>
                        <td style="text-align: center">{{ $kq->socaudung }}</td>
                        <td style="text-align: center">{{ $kq->socausai }}</td>
                        <td style="text-align: center">{{ $kq->diem }}</td>
                        <td>
                            @if($kq->diem < 3)
                            Kém
                        @elseif($kq->diem < 5)
                            Yếu
                        @elseif($kq->diem < 6.5)
                            Trung Bình
                        @elseif($kq->diem < 8.5)
                            Khá
                        @elseif($kq->diem < 9.5)
                            Giỏi
                        @else
                            Xuất Sắc
                        @endif
                    </td>

                    </tr>
                      @endforeach


                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->

      </div>
      <!-- /.content-wrapper -->
@endsection
