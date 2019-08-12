@extends('nguoirade.master.index')
@section('suadethi')


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
              Sửa Đề Thi: {{ $dethi->tendethi }}</div>
            <div class="card-body">
              <div class="table-responsive">
                    <div class="container">
                            <form action="nguoirade/suadethi/{{ $dethi->id }}" method="POST">
                                {{ csrf_field() }}
                              <div class="form-group">
                                <label for="email">Tên Đề Thi: </label>
                                <input type="text" class="form-control" id="email" value="{{ $dethi->tendethi }}" placeholder="" name="tendethi">
                              </div>
                              <div class="form-group">
                                <label for="pwd">Thời Gian Bắt Đầu Kì Thi</label>
                                <input type="datetime" class="form-control" value="{{ $dethi->thoigianbatdau }}" id="pwd" name="thoigianbatdau">
                              </div>
                              <div class="form-group">
                                    <label for="pwd">Thời Gian Kết Thúc</label>
                                    <input type="datetime" class="form-control" value="{{ $dethi->thoigianketthuc }}" id="pwd" name="thoigianketthuc">
                                <div class="form-group">
                                        <label for="pwd">Thời Gian Làm Bài</label>
                                        <input type="time" value="{{ $dethi->thoigianlambai }}" class="form-control" id="pwd" name="thoigianlambai">
                                </div>
                                <div class="form-group">
                                        <label for="pwd">Trạng Thái</label>
                                        <select class="form-control" id="sel1" name="trangthai">
                                                <option
                                                @if($dethi->trangthai === 1)
                                                    selected
                                                @endif
                                                value="1">Mở</option>
                                                <option
                                                @if($dethi->trangthai === 0)
                                                    selected
                                                @endif
                                                value="0">Đóng</option>
                                              </select>
                                </div>
                              <input type="submit" class="btn btn-primary" value="Sửa">
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

