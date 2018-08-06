@extends('layouts.master')

@section('header_css')
  <!--Font Awesome [ OPTIONAL ]-->
  <link href="/public/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <link href="/public/assets/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet">

@endsection
@section('page-head')
  <div id="page-head">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
      <h1 class="page-header text-overflow">Quản lý thành viên</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->


    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
      <li><a href="#"><i class="demo-pli-home"></i></a></li>
      <li class="active">Quản lý thành viên</li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

  </div>
@endsection

@section('content')
  <div class="panel panel-bordered panel-dark">
    <div class="panel-heading">
      <h3 class="panel-title">
        Cập nhật thành viên
      </h3>
    </div>
    {!! Form::open(['route' => ['user.post-edit', $id], 'method' => 'post', 'class' => 'panel-body form-horizontal form-padding']) !!}
    {{--Begin Input Staff Name--}}
    <div class="form-group">
      <label for="username" class="col-sm-2 control-label">
        <dt>Tên tài khoản</dt>
      </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="username" value="<?=$model->username ?>" disabled id="username">
      </div>
    </div>
    {{--End Input Staff Name--}}

    {{--Begin Input Staff Password--}}
    <div class="form-group">
      <label for="password" class="col-sm-2 control-label">
        <dt>Mật khẩu</dt>
      </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="password" value="" id="password">
      </div>
    </div>
    {{--End Input Staff Password--}}

    {{--Begin Input Staff Confirm Password--}}
    <div class="form-group">
      <label for="password_confirmation" class="col-sm-2 control-label">
        <dt>Lặp lại mật khẩu</dt>
      </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="password_confirmation" value="" id="password_confirmation">
      </div>
    </div>
    {{--End Input Staff Confirm Password--}}

    {{--Begin Input Staff First Name--}}
    <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">
        <dt>Tên</dt>
      </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="firstname" value="<?=$model->firstname ?>" id="firstname">
      </div>
    </div>
    {{--End Input Staff First Name--}}

    {{--Begin Input Staff Last Name--}}
    <div class="form-group">
      <label for="lastname" class="col-sm-2 control-label">
        <dt>Họ</dt>
      </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="lastname" value="<?=$model->lastname ?>" id="lastname">
      </div>
    </div>
    {{--End Input Staff Last Name--}}

    {{--Begin Input Staff Avatar--}}
    <div class="form-group">
      <label for="staff_avatar" class="col-sm-2 control-label">
        <dt>Ảnh đại diện</dt>
      </label>
      <div class="col-sm-10">
        <img id="im_avatar" style="display: block" class="img-lg img-circle mar-ver" src="<?=($model->avatar != null || $model->avatar != '') ? $model->avatar : '/public/assets/img/profile-photos/2.png' ?>">
        <input type="hidden" id="avatar" name="avatar">
        <a href="/public/assets/tinymce/filemanager/dialog.php?type=1&field_id=avatar" class="btn btn-mint btn-icon iframe-btn" type="button">
          <i class="fa fa-paperclip"> Chọn avatar</i>
        </a>
      </div>
    </div>
    {{--End Input Staff Avatar--}}

    {{--Begin Input Staff Status--}}
    <div class="form-group">
      <label for="staff_status" class="col-sm-2 control-label">
        <dt>Trạng thái</dt>
      </label>
      <div class="col-sm-10">
        <div class="radio">
          <input id="staff_status_true" class="magic-radio" type="radio" value="1" name="status" <?=($model->status == 1) ? 'checked' : '' ?>>
          <label for="staff_status_true">Kích hoạt</label>

          <input id="staff_status_false" class="magic-radio" type="radio" value="0" name="status" <?=($model->status == 0) ? 'checked' : '' ?>>
          <label for="staff_status_false">Đang chờ</label>
        </div>
      </div>
    </div>
    {{--End Input Staff Status--}}
    <div class="row">
      <div class="col-sm-10 col-sm-offset-2">
        <button class="btn btn-mint" type="submit">Lưu</button>
      </div>
    </div>
    {!! Form::close() !!}


  </div>
@endsection

@section('footer_js')
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="/public/assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

  <script>
    $(document).ready(function () {
      $('.iframe-btn').fancybox({
        'width'		: 900,
        'height'	: 600,
        'type'		: 'iframe',
        'autoScale'    	: false
      });
    });

    function responsive_filemanager_callback(field_id){
      var url = jQuery('#'+field_id).val();
      $("#im_avatar").attr('src', url);
    }
  </script>
@endsection