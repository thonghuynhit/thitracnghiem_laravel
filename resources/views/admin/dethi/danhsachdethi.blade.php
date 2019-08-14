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
          Danh Sách Đề Thi</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên Đề Thi</th>
                  <th>Thời Gian Bắt Đầu</th>
                  <th>Thời Gian Kết Thúc</th>
                  <th>Thời Gian Làm Bài</th>
                  <th>Người Ra Đề</th>
                  <th>Trạng Thái</th>
                  <th></th>
                  <th></th>
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
                  <th></th>
                </tr>
              </tfoot>
              <tbody>


                  @foreach ($dethi as $dt)
                  <tr>
                    <td style="text-align: center">{{ $stt+= 1 }}</td>
                    <td style="text-align: center">{{ $dt->tendethi }}</td>
                    <td style="text-align: center">{{ $dt->thoigianbatdau }}</td>
                    <td style="text-align: center">{{ $dt->thoigianketthuc }}</td>
                    <td style="text-align: center">{{ $dt->thoigianlambai }}</td>
                    <td style="text-align: center">{{ $dt->nguoirade->hoten }}</td>
                    <td style="text-align: center">
                        @if($dt->trangthai === 1)
                            Đang Mở
                        @else
                            Đã Đóng
                        @endif
                    </td>
                    <td style="text-align: center"><a href="admin/dethi/dscauhoi/{{ $dt->id }}" class=".btn .btn-primary"><i class="fas fa-eye"></i></a></td>
                    <td style="text-align: center" ><a href="admin/dethi/suadethi/{{ $dt->id }}" class=".btn .btn-primary"><i class="fas fa-edit"></i></a></td>
                    <td style="text-align: center"><a href="admin/dethi/xoadethi/{{ $dt->id }}" class=".btn .btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                    <td style="text-align: center"><a href="admin/dethi/ketquathi/{{ $dt->id }}" class=".btn .btn-primary"><i class="fas fa-poll"></i></a></td>

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
    @if(isset($ad_login))
    <div>{{ $ad_login->hoten }}</div>
@endif
  </div>
  <!-- /.content-wrapper -->

@endsection
