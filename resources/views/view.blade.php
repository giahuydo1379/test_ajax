@extends('layouts.master')

@section('header_css')
  <!--Bootstrap Table [ OPTIONAL ]-->
  <link href="assets/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">


  <!--Font Awesome [ OPTIONAL ]-->
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">


  <!--X-editable [ OPTIONAL ]-->
  <link href="assets/plugins/x-editable/css/bootstrap-editable.css" rel="stylesheet">
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

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

  </div>
@endsection
@section('content')
  <div class="panel">
    <div class="panel-body">
      <?php $margin = 0; ?>
          <?php $margin = 10; ?>

        <a href="{{ url('users/add') }}" id="btn-add" class="btn btn-primary">
        <i class="fa fa-plus-circle icon-lg"></i> Thêm thành viên</a>
      <a href="{{ url('users/show-trash') }}" id="btn-trash" class="btn btn-primary" style="margin-left: {{ $margin }}px;">
        <i class="fa fa-trash icon-lg"></i> Thùng rác</a>
      <table id="show-all" class="demo-add-niftycheck" data-toggle="table"
             data-url="/"
             data-toolbar="#btn-add, #btn-trash"
             data-search="true"
             data-show-refresh="true"
             data-show-toggle="true"
             data-show-columns="true"
             data-sort-name="id"
             data-page-list="[5, 10, 20]"
             data-side-pagination="server"
             data-page-size="15"
             data-pagination="true"
             data-show-pagination-switch="true">

        <thead>
        <tr>
          <th data-field="task" data-sortable="true">Task</th>
          <th data-field="description" data-sortable="true">Description</th>
          <th data-field="created_at" data-sortable="true" >Ngày tạo</th>
          <th data-field="updated_at" data-sortable="true" >Ngày cập nhật</th>
          <th data-field="done" data-sortable="true" data-align="center" >Trạng thái</th>
        </tr>
        </thead>
      </table>
    </div>
  </div>
@endsection

@section('footer_js')
  <!--Demo script [ DEMONSTRATION ]-->
  <script src="assets/js/demo/nifty-demo.min.js"></script>


  <!--Bootstrap Table Sample [ SAMPLE ]-->
  <script src="assets/js/demo/tables-bs-table.js"></script>


  <!--X-editable [ OPTIONAL ]-->
  <script src="assets/plugins/x-editable/js/bootstrap-editable.min.js"></script>


  <!--Bootstrap Table [ OPTIONAL ]-->
  <script src="assets/plugins/bootstrap-table/bootstrap-table.min.js"></script>


  <!--Bootstrap Table Extension [ OPTIONAL ]-->
  <script src="assets/plugins/bootstrap-table/extensions/editable/bootstrap-table-editable.js"></script>

  
@endsection
