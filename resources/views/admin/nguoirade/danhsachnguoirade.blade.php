@extends('admin.master.index')

@section('danhsachnguoirade')

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
          Danh Sách Người Ra Đề</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Họ Tên</th>
                  <th>Ngày Sinh</th>
                  <th>Giới Tính</th>
                  <th>Email</th>
                  <th>Điạ Chỉ</th>
                  <th>Sửa</th>
                  <th>Xoá</th>

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
                </tr>
              </tfoot>
              <tbody>


                  @foreach ($nguoirade as $rd)
                  <tr>
                    <td style="text-align: center">{{ $stt+= 1 }}</td>
                    <td style="text-align: center">{{ $rd->hoten }}</td>
                    <td style="text-align: center">{{ $rd->ngaysinh }}</td>
                    <td style="text-align: center">
                        @if ($rd->gioitinh === 1)
                             Nam
                        @else
                            Nữ
                        @endif
                    </td>
                    <td style="text-align: center">{{ $rd->email }}</td>
                    <td style="text-align: center">{{ $rd->diachi }}</td>
                    <td style="text-align: center"><a href="admin/suadsnguoirade/{{ $rd->id }}" class=".btn .btn-primary"><i class="fas fa-user-edit"></i></a></td>
                    <td style="text-align: center"><a href="admin/xoadsnguoirade/{{ $rd->id }}" class=".btn .btn-danger"><i class="fas fa-trash-alt"></i></a></td>
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
