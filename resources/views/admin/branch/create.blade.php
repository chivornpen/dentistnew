@extends('layouts.admin')

@section('content')
    <br>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                Branch
            </div>
            <div class="panel-body">
                {!! Form::open() !!}
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('Branch Name') !!}
                                {!! Form::text('name',null,['class'=>'form-control border-radius','required'=>'true']) !!}
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('Branch Local') !!}
                                {!! Form::text('branchlocal',null,['class'=>'form-control border-radius','required']) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('Short Name') !!}
                                {!! Form::text('shortname',null,['class'=>'form-control border-radius','required']) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('Postal Code') !!}
                                {!! Form::number('pcode',null,['class'=>'form-control border-radius','min'=>0]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::submit('Create',['class'=>'btn btn-success btn-sm']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
            <hr>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="listViews">
                            {{--<div id="loading" class="center">--}}
                                {{--<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

        $(document).ready(function () {
           getContent();
        });
        function getContent() {
            $.ajax({
                type : 'get',
                url : "{{route('branch.index')}}",
                dataType : 'html',
                beforeSend:function () {

                },success:function (data) {
                     $('#listViews').html(data);
                     $('#branchList').DataTable();
                }, error:function (error) {
                    console.log(error);
                }
            });
        }
    </script>
@endsection