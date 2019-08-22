@extends('thisinh.master.index')
@section('autosub')
<form id="form_sub" action="thisinh/lambaithi/lambaithi/{{ $id }}" method="POST">
        {{ csrf_field() }}
        <input type="text" name="made" value="{{ $id }}">
        <input type="submit" class="submit" value="sub">
    </form>
    <script>
            jQuery(document).ready(function($) {
                    jQuery('#form_sub').submit();
            });
    </script>
@endsection
