@extends('nguoirade.master.index')

@section('danhsachdethi')


<div id="content-wrapper">

    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <?php $i = 0; ?>
      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Danh Sách Đề Thí</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên Đề Thi</th>
                  <th>Mã Đề Thí</th>
                  <th>Thời Gian Bắt Đầu</th>
                  <th>Thời Gian Kết Thúc</th>
                  <th>Thời Gian Làm Bài</th>
                  <th>Trạng Thái</th>
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
                </tr>
              </tfoot>
              <tbody>
                @foreach($dethi as $dt)
                <tr>
                    <td style="text-align: center">{{ $i+=1 }}</td>
                    <td style="text-align: center">{{ $dt->tendethi }}</td>
                    <td style="text-align: center">{{ $dt->id }}</td>
                    <td style="text-align: center">{{ $dt->thoigianbatdau }}</td>
                    <td style="text-align: center">{{ $dt->thoigianketthuc }}</td>
                    <td style="text-align: center">{{ $dt->thoigianlambai }}</td>
                    <td style="text-align: center">
                        @if($dt->trangthai === 1)
                        Đang Mở
                        @else
                        Đã Đóng
                        @endif
                    </td>
                    <td style="text-align: center"><a href="nguoirade/themcauhoi/{{ $dt->id }}" class=".btn .btn-primary"><i class="fas fa-plus"></i></a></td>
                    <td style="text-align: center"><a href="nguoirade/suadethi/{{ $dt->id }}" class=".btn .btn-primary"><i class="fas fa-edit"></i></a></td>
                    <td style="text-align: center"><a href="#" class=".btn .btn-primary" data-toggle="modal" data-target="#myModal{{ $dt->id }}"s><i class="fas fa-trash-alt"></i></a>

                        <!-- Modal -->
  <div class="modal fade" id="myModal{{ $dt->id }}" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Thông Báo</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          <p>Bạn Có Muốn Xoá Đề Thi
            <b>
                    {{ $dt->tendethi }}
                    Không!
            </b>
          </p>
        </div>
        <div class="modal-footer">
            <a href="nguoirade/xoadethi/{{ $dt->id }}" style="padding: 8px 25px; border-radius: 5px; background-color: #c0392b; text-decoration: none; color: black;">OK</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
        </div>
      </div>

    </div>
  </div>

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
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright © Your Website 2019</span>
        </div>
      </div>
    </footer>

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
@endsection()
