@extends('admin.master.index')
@section('themadmin')


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
          <div class="card mb-3" style='max-width: 900px'>
            <div class="card-header">
              <i class="fas fa-table"></i>
              Thêm Admin</div>
            <div class="card-body">
              <div class="table-responsive">
                    <div class="container">
                            <form action="{{ route('themadmin') }}" method="POST">
                                {{ csrf_field() }}
                              <div class="form-group">
                                <label for="email">Họ Tên: </label>
                                <input type="text" class="form-control" id="email" placeholder="Nhập Họ Tên" name="hoten">
                              </div>
                                <div class="form-group">
                                        <label for="pwd">Email</label>
                                        <input type="email" class="form-control" id="pwd" name="email">
                                </div>
                                <div class="form-group">
                                        <label for="pwd">Địa Chỉ</label>
                                        <input type="text" class="form-control" id="pwd" name="diachi">
                                </div>
                                <div class="form-group">
                                        <label for="pwd">Mật Khẩu</label>
                                        <input type="password" class="form-control" required id="pwd" name="password">
                                </div>
                              <input type="submit" class="btn btn-primary" value="Thêm">
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

