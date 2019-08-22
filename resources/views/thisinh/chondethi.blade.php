@extends('thisinh.master.index')
@section('chondethi')

<div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-calendar-check"></i>
          Chọn Đề Thi</div>
        <div class="card-body">
          <div class="table-responsive">
            <!-- Chon nguoi ra de -->
            <div class="form-group">
                <label for="sel1">Chọn Người Ra Đề:</label>
                <select class="form-control" style="width: 500px;" id="nguoirade">
                  <option value="0">Tất Cả Đề Thi</option>
                  @foreach($nguoirade as $rd)
                  <option value="{{ $rd->id }}">{{ $rd->hoten }}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="sel1">Chọn Đề Thi</label>
                  <select id="dethi" class="form-control">
                      <option>Đề Thi</option>
                      @foreach($dethi as $dt)
                      <option value="{{ $dt->id }}">{{ $dt->tendethi }}</option>
                      @endforeach
                  </select>
            </div>
            <div class="form-group" id="chonde" style="min-height: 400px; display: flex; justify-content: center; align-items: center">

            </div>
          </div>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>

    </div>
    <!-- /.container-fluid -->
@endsection()
