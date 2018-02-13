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
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      {!!Form::open()!!}
      {!!Form::close()!!}
    </div>
  </div>
</section>
@stop