@extends('nguoirade.master.index')
@section('themdethi')


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

          @if(count($errors) > 0)
            <div class="alert alert-danger">
                    @foreach ($errors->all() as $err)
                    {{ $err }}<br>
                    @endforeach
            </div>
            @endif
            @if(session('thongbao'))
                <div class="alert alert-info">
                    <strong>{{ session('thongbao') }}</strong>
                  </div>
            @endif
          <!-- Area Chart Example-->

          <!-- DataTables Example -->

          <div class="card mb-3" style='max-width: 900px'>
            <div class="card-header">
              <i class="fas fa-table"></i>
              Thêm Đề Thi</div>
            <div class="card-body">
              <div class="table-responsive">
                    <div class="container">
                            <form action="nguoirade/themdethi" method="POST">
                                {{ csrf_field() }}
                              <div class="form-group">
                                <label for="email">Tên Đề Thi: </label>
                                <input type="text" class="form-control" id="email" value="" placeholder="" name="tendethi">
                              </div>
                              <div class="form-group">
                                <label for="pwd">Thời Gian Bắt Đầu Kì Thi</label>
                                <input type="datetime-local" class="form-control" value="" id="pwd" name="thoigianbatdau">
                              </div>
                              <div class="form-group">
                                    <label for="pwd">Thời Gian Kết Thúc</label>
                                    <input type="datetime-local" class="form-control" value="" id="pwd" name="thoigianketthuc">
                                <div class="form-group">
                                        <label for="pwd">Thời Gian Làm Bài</label>
                                        <input type="time" value="" class="form-control" id="pwd" name="thoigianlambai">
                                </div>
                                <div class="form-group">
                                        <label for="pwd">Trạng Thái</label>
                                        <select class="form-control" id="sel1" name="trangthai">
                                                <option value="1">Mở</option>
                                                <option value="0">Đóng</option>
                                              </select>
                                </div>
                              <input type="submit" class="btn btn-primary" value="Thêm">
                              <input type="reset" class="btn btn-warning" value="Làm Mới">
                            </form>
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
@endsection()

