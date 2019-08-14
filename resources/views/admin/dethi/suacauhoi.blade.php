@extends('admin.master.index')
@section('suacauhoi')


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
                  <?php
                  $traloi = array();
                  $i = 0;
                  foreach($cautraloi as $tl){
                    $traloi[$i++] = $tl->noidung;
                  }
                  ?>
          <div class="card mb-3" style='max-width: 900px'>
            <div class="card-header">
              <i class="fas fa-table"></i>
              Sửa Câu Hỏi</div>
            <div class="card-body">
              <div class="table-responsive">
                    <div class="container">
                            <form action="admin/dethi/suacauhoi/{{ $cauhoi->id }}" method="POST">
                                {{ csrf_field() }}
                              <div class="form-group">
                                <label for="email">Nội Dung Câu Hỏi: </label>
                                <input type="text" class="form-control" id="email" value="{{ $cauhoi->noidung }}" placeholder="" name="noidung">
                              </div>
                              <div class="form-group">
                                <label for="pwd">Mức Độ</label>
                                <select class="form-control" id="sel1" name="mucdo">
                                        <option
                                        @if($cauhoi->mucdo === "0")
                                        selected
                                        @endif
                                        value="0">Dể</option>
                                        <option
                                        @if($cauhoi->mucdo === "1")
                                        selected
                                        @endif
                                        value="1">Trung Bình</option>
                                        <option
                                        @if($cauhoi->mucdo === "2")
                                        selected
                                        @endif
                                        value="2">Khó</option>
                                      </select>
                              </div>
                                <div class="form-group">
                                    <label for="pwd">Phương Án A</label>
                                    <input type="text" value="{{ $traloi[0] }}" class="form-control" id="pwd" name="a">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Phương Án B</label>
                                    <input type="text" value="{{ $traloi[1] }}" class="form-control" id="pwd" name="b">
                                </div>
                                <div class="form-group">
                                        <label for="pwd">Phương Án C</label>
                                        <input type="text" value="{{ $traloi[2] }}" class="form-control" id="pwd" name="c">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Phương Án D</label>
                                    <input type="text" value="{{ $traloi[3] }}" class="form-control" id="pwd" name="d">
                                </div>
                                <div class="form-group">
                                        <label for="pwd">Đáp Án Đúng</label>
                                        <select class="form-control" id="sel1" name="dapandung">
                                                <option
                                                @if($cauhoi->id_dapan === 1)
                                                    selected
                                                @endif
                                                value="1">A</option>
                                                <option
                                                @if($cauhoi->id_dapan === 2)
                                                    selected
                                                @endif
                                                value="2">B</option>
                                                <option
                                                @if($cauhoi->id_dapan === 3)
                                                    selected
                                                @endif
                                                value="3">C</option>
                                                <option
                                                @if($cauhoi->id_dapan === 4)
                                                    selected
                                                @endif
                                                value="4">D</option>
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

