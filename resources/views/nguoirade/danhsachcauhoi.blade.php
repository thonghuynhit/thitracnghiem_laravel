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
                        <select class="form-control" selected style="max-width: 500px;" name="" id="cauhoi">
                            <option value="0">Tất Cả Câu Hỏi</option>
                            @foreach($dethi as $dt)
                            <option value="{{ $dt->id }}">{{ $dt->tendethi }}</option>
                            @endforeach
                        </select>
                </div>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>STT</th>
                            <th>Nội Dung Câu Hỏi</th>
                            <th>Mức Độ</th>
                            <th>Phương Án A</th>
                            <th>Phương Án B</th>
                            <th>Phương Án C</th>
                            <th>Phương Án D</th>
                            <th>Phương Án Đúng</th>
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
                        <?php $i = 0; ?>
                        <tbody id="dscauhoi">
                        @foreach($dethi as $dt)
                            @foreach($dt->cauhoi as $ch)
                                <tr>
                                    <td style="text-align: center">{{ $i+=1 }}</td>
                                    <td style="text-align: center">{!! $ch->noidung !!}</td>
                                    <td style="text-align: center">
                                        @if($ch->mucdo === "0")
                                        Dể
                                        @elseif($ch->mucdo === "1")
                                        Trung Bình
                                        @else
                                        Khó
                                        @endif
                                    </td>
                                    @foreach($ch->cautraloi as $tl)
                                    <td style="text-align: center">{{ $tl->noidung }}</td>
                                    @endforeach
                                    <td style="text-align: center">{{ $ch->dapan->traloi }}</td>
                                    <td style="text-align: center"><a href="nguoirade/suacauhoi/{{ $ch->id }}" class=".btn .btn-primary"><i class="fas fa-edit"></i></a></td>
                                    <td style="text-align: center"><a href="nguoirade/xoacauhoi/{{ $ch->id }}" class=".btn .btn-primary"><i class="fas fa-trash-alt"></i></a></td>

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
