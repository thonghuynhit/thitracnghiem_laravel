@extends('nguoirade.master.index')

@section('danhsachcauhoi')


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
          Danh Sách Câu Hỏi</div>
        <div class="card-body">

          <div class="table-responsive">
                <div class="form-group">
                        <label for="usr">Chọn Đề Thi</label>
                        <select class="form-control" selected style="max-width: 500px;" name="" id="dethi_kq">
                            <option value="0">Tất Cả Đề Thi</option>
                            @foreach($dethi as $dt)
                            <option value="{{ $dt->id }}">{{ $dt->tendethi }}</option>
                            @endforeach
                        </select>
                </div>

                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>STT</th>
                            <th>Tên Thí Sính</th>
                            <th>Số Câu Đúng</th>
                            <th>Số Câu Sai</th>
                            <th>Điểm Thi</th>

                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>

                          </tr>
                        </tfoot>
                        <?php $i = 0; ?>
                        <tbody id="dsketqua">
                        @foreach($dethi as $dt)
                            @foreach($dt->ketqua as $kq)
                                <tr>
                                    <td style="text-align: center">{{ $i+=1 }}</td>
                                    <td style="text-align: center">{!! $kq->thisinh->hoten !!}</td>
                                    <td style="text-align: center">{{ $kq->socaudung }}</td>
                                    <td style="text-align: center">{{ $kq->socausai }}</td>
                                    <td style="text-align: center">{{ $kq->diem }}</td>
                                    <div class="modal fade" id="cauhoi" role="dialog">
                                            <div class="modal-dialog">

                                              <!-- Modal content-->
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"><i class="fas fa-exclamation-triangle" style='color: #f1c40f;'>  Cảnh Báo</i></h4>
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                  <p>Bạn Có Muốn Xoá Câu Hỏi Này Không?  </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="nguoirade/xoacauhoi" style="padding: 8px 25px; border-radius: 5px; background-color: #c0392b; text-decoration: none; color: black;">OK</a>
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
                                                </div>
                                              </div>

                                            </div>
                                          </div>

                                </tr>
                            @endforeach
                        @endforeach
                        </tbody>
                      </table>


          </div>

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
