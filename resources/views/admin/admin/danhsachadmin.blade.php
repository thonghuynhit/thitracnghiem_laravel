@extends('admin.master.index')

@section('danhsachadmin')

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
          Danh Sách Admin</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Họ Tên</th>
                  <th>Email</th>
                  <th>Địa Chỉ</th>
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
                </tr>
              </tfoot>
              <tbody>


                  @foreach ($admin as $ad)
                  <tr>
                    <td style="text-align: center">{{ $stt+= 1 }}</td>
                    <td style="text-align: center">{{ $ad->hoten }}</td>
                    <td style="text-align: center">{{ $ad->email }}</td>
                    <td style="text-align: center">{{ $ad->diachi }}</td>
                    <td style="text-align: center"><a href="admin/suadsadmin/{{ $ad->id }}" class=".btn .btn-primary"><i class="fas fa-user-edit"></i></a></td>
                    <td style="text-align: center"><a href="admin/xoadsadmin/{{ $ad->id }}" class=".btn .btn-danger"><i class="fas fa-trash-alt"></i></a></td>
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
