@extends('thisinh.master.index')
@section('doimatkhau')
<div class="reset_pass">
    <span>Đổi Mật Khẩu</span>
    <form id="reset_pass" action="thisinh/doimatkhau" method="POST">
        {{ csrf_field() }}
        @if(session('thongbao'))
            <div class="alert alert-danger">
                <strong>{{ session('thongbao') }}</strong>
            </div>
        @endif
        <div class="form-group">
            <label for="pwd">Mật Khẩu Mới: </label>
            <input type="password" class="form-control" id="pass_new" name="pass_new" id="pwd">
        </div>
        <div class="form-group">
                <label for="pwd">Nhập Lại Mật Khẩu: </label>
                <input type="password" id="pass_comfirm" class="form-control" name="pass_comfirm" id="pwd">
        </div>
        <div class="form-group">
            <input type="reset" class="form-control" id="pwd">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn btn-success" id="pwd">
        </div>
        <script>
                $().ready(function() {
                    $("#reset_pass").validate({
                        onfocusout: false,
                        onkeyup: false,
                        onclick: false,
                        rules: {
                            "pass_new": {
                                required: true,
                            },
                            "pass_ed": {
                                required: true,
                            },
                            "pass_comfirm": {
                                equalTo: "#pass_new"
                            }
                        },
                        messages: {
                            "pass_ed": {
                                required: "Bạn Chưa Nhập Mật Khẩu Củ"
                            },
                            "pass_new": {
                                required: "Bạn Chưa Nhập Mật Khẩu Mới"
                            },
                            "pass_comfirm": {
                                equalTo: "Hai Mật Khẩu Không Giống Nhau"
                            }
                        }
                    });
                });

        </script>
    </form>


</div>
@endsection
