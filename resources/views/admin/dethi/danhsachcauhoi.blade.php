@extends('admin.master.index')

@section('danhsachdethi')

<div id="content-wrapper">

    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
      </ol>

      <!-- Icon Cards-->


      <!-- Area Chart Example-->

      <?php $stt = 0; ?>
      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Danh Sách Câu Hỏi Của Đề Thi: <b>{{ $dethi_ch->tendethi }}</b></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Câu Hỏi</th>
                  <th>Mức Độ</th>
                  <th>Phương Án A</th>
                  <th>Phương Án B</th>
                  <th>Phương Án C</th>
                  <th>Phương Án D</th>
                  <th>Đáp Án Đúng</th>
                  <th></th>
                  <th></th>


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
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </tfoot>
              <tbody>


                    @foreach ($dethi_ch->cauhoi as $ch)
                    <tr>
                      <td style="text-align: center">{{ $stt+= 1 }}</td>
                      <td style="text-align: center">{!! $ch->noidung !!}</td>
                      <td style="text-align: center">
                        @if($ch->mucdo === "0")
                          Dể
                        @elseif($ch->mucdo === "1")
                            Trung Bình
                        @else
                            Khó
                        @endif

                      </td>
                      @foreach($ch->cautraloi as $ctl)
                          <td style="text-align: center">{{ $ctl->noidung }}</td>
                      @endforeach()
                      <td>{{ $ch->dapan->traloi }}</td>
                      <td style="text-align: center"><a href="admin/dethi/suacauhoi/{{ $ch->id }}" class=".btn .btn-primary"><i class="fas fa-edit"></i></a></td>
                      <td style="text-align: center"s><a href="admin/dethi/xoacauhoi/{{ $ch->id }}" class=".btn .btn-danger"><i class="fas fa-trash-alt"></i></a></td>

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
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright © Your Website 2019</span>
        </div>
      </div>
    </footer>

  </div>
  <!-- /.content-wrapper -->

@endsection
