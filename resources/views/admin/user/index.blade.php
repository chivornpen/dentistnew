@extends('layouts.admin')
@section('content')
<!-- mytest -->
<section class="content-header">
  <h1>
    User View
    <small>All Users</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">User</li>
  </ol>
</section>
<section class="content container-fluid">
  <div class="row">
    <div class="col-lg-12">
      {!!Form::open()!!}

      {!!Form::close()!!}
    </div>
  </div>
  <div class="row table-responsive" id="tblViewuse">
  </div>
</section>
@stop
@section('script')
<script>
$(document).ready(function () {
  getUserView()
});
function getUserView(){
  $.ajax({
    type: "get",
    url: "{{route('user.viewUser')}}",
    dataType: "html",
    success: function (data) {
      console.log(data)
    }
    error:function (error) { 
      console.log(error)
    }
  });
};
</script>
@stop