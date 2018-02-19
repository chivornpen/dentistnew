@extends('layouts.admin')

@section('content')
    <br>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                User
            </div>
            <div class="panel-body">
                {!! Form::open(['files'=>true]) !!}
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('User Name') !!}
                                {!! Form::text('name',null,['class'=>'form-control border-radius','required'=>'true','placeholder'=>'User name']) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('Display User Name') !!}
                                {!! Form::email('displayName',null,['class'=>'form-control border-radius','required'=>'true','placeholder'=>'Display User name']) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('User Contect') !!}
                                {!! Form::text('tel',null,['class'=>'form-control border-radius','required'=>'true','placeholder'=>'123 356 789']) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('User Email') !!}
                                {!! Form::email('email',null,['class'=>'form-control border-radius','required'=>'true','placeholder'=>'exmple@exmaple.com']) !!}
                            </div>
                        </div>
                    </div>
                    {{--other--}}
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('Password') !!}
                                {!! Form::password('password',['class'=>'form-control border-radius','required'=>'true']) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('Comfirm Password') !!}
                                {!! Form::password('com-password',['class'=>'form-control border-radius','required'=>'true']) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('Start Date') !!}
                                {!! Form::date('startDate',null,['class'=>'form-control border-radius','required'=>'true','placeholder'=>'Display User name']) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('Expired Date') !!}
                                {!! Form::date('expiredDate',null,['class'=>'form-control border-radius','required'=>'true','placeholder'=>'123 356 789']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                {!! Form::label('Role Name') !!}
                                {!! Form::select('role_id',$role,null,['class'=>'form-control border-radius','required'=>'true']) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                {!! Form::label('Staff Name') !!}
                                {!! Form::select('staff_id',[''=>'Choose One'],null,['class'=>'form-control border-radius','required'=>'true']) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                {!! Form::label('Branch Name') !!}
                                {!! Form::select('branch_id',[''=>'Choose One'],null,['class'=>'form-control border-radius','required'=>'true']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                {!! Form::label('Menun') !!}
                                {!! Form::select('module[]',$module,null,['class'=>'form-control border-radius','id'=>'select2','required','multiple','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row" style="margin-top:5%">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 col-xs-5 col-sm-2">
                            <div class="form-group">
                                <img src="{{asset('/userimage/default-user.png')}}" alt="" id="preView" style="height: 80px; width: 80px; border-radius: 50px; border: 2px solid #346895; padding: 2px;">
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="image" class="btn btn-primary" style="padding: 4px 16px;">Browse</label>
                                <input type="file" class="edit-form-control" id="image" onchange="loadFile(event)" accept="image/*" name="image" style="display: none;">
                                @if($errors->has('image'))
                                    <span class="text-danger">{{$errors->first('image')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                {!! Form::submit('Create',['class'=>'btn btn-success btn-sm' ]) !!}
                                {!! Form::reset('Clear',['class'=>'btn btn-warning btn-sm' ]) !!}
                                <a href="{{URL::to('/')}}" class="btn btn-default btn-sm">Close</a>
                            </div>
                        </div>
                    </div>
                </div>

                {!! Form::close() !!}
            </div>

            <hr>
            <hr>
            {{--UserView--}}
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="listViews">
                            <div id="loading" class="center">
                                <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                            </div>
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
            $('#select2').select2();
            getContent();
        });
        function getContent() {
            $.ajax({
                type : 'get',
                url : '{{route("user.index")}}',
                dataType : 'html',
                beforeSend:function () {
                  $('#loading').css('display','');
                },success:function (data) {
                    $('#loading').css('display','none');
                     $('#listViews').html(data);
                     $('#branchList').DataTable();
                }, error:function (error) {
                    console.log(error);
                }
            });
        };
    </script>
@endsection