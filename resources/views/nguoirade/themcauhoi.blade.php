@extends('nguoirade.master.index')
@section('themcauhoi')


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
              Sửa Thí Sinh</div>
            <div class="card-body">
              <div class="table-responsive">
                    <div class="container">
                            <form action="nguoirade/themcauhoi/{{ $id }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                <label for="email">Nội Dung Câu Hỏi: </label>
                                <textarea name="noidung" id="editor1" rows="10" cols="150"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="pwd">Mức Độ</label>
                                <select class="form-control" id="sel1" name="mucdo">
                                        <option value="0">Dể</option>
                                        <option value="1">Trung Bình</option>
                                        <option value="2">Khó</option>
                                      </select>
                                </div>
                                <div class="form-group">
                                    <label for="email">Câu A: </label>
                                    <input type="text" class="form-control" id="email" value="" placeholder="" name="a">
                                </div>
                                <div class="form-group">
                                     <label for="email">Câu B: </label>
                                    <input type="text" class="form-control" id="email" value="" placeholder="" name="b">
                                </div>
                                <div class="form-group">
                                    <label for="email">Câu C: </label>
                                    <input type="text" class="form-control" id="email" value="" placeholder="" name="c">
                                    </div>
                                <div class="form-group">
                                    <label for="email">Câu D: </label>
                                    <input type="text" class="form-control" id="email" value="" placeholder="" name="d">
                                </div>
                                <div class="form-group">
                                        <label for="pwd">Đáp Án Đúng</label>
                                        <select class="form-control" id="sel1" name="dapandung">
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                                <option value="4">D</option>
                                              </select>
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

