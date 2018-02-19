@extends('layouts.admin')
@section('content')
    <br>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                Staff
            </div>
            <div class="panel-body">
                {!! Form::open(['action'=>'StaffController@store','method'=>'POST','files'=>true]) !!}
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                {!! Form::label('Staff Name') !!}
                                {!! Form::text('name',null,['class'=>'form-control border-radius']) !!}
                                @if($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group">
                                {!! Form::label('Contact') !!}
                                {!! Form::text('contact',null,['class'=>'form-control border-radius']) !!}
                                @if($errors->has('contact'))
                                    <span class="text-danger">{{$errors->first('contact')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-2">

                            {!! Form::label('Gender') !!}
                            <div class="form-group" style="margin-top: 5%">
                                <div class="container">
                                    <div class="radio-inline radio radio-primary">
                                        <input type="radio" name="gender" id="male" value="M">
                                        <label for="male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="radio-inline radio radio-success">
                                        <input type="radio" name="gender" id="female" value="F">
                                        <label for="female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                                @if($errors->has('gender'))
                                    <span class="text-danger">{{$errors->first('gender')}}</span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                {!! Form::label('Level') !!}
                                {!! Form::text('level',null,['class'=>'form-control border-radius']) !!}
                                @if($errors->has('level'))
                                    <span class="text-danger">{{$errors->first('level')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                {!! Form::label('Email') !!}
                                {!! Form::text('email',null,['class'=>'form-control border-radius']) !!}
                                @if($errors->has('email'))
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                {!! Form::label('Commission') !!}
                                {!! Form::text('commission',null,['class'=>'form-control border-radius']) !!}
                                @if($errors->has('commission'))
                                    <span class="text-danger">{{$errors->first('commission')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="row" style="margin-top:5%">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 col-xs-5 col-sm-2">
                            <div class="form-group">
                                <img src="{{asset('/photo/default_user.png')}}" alt="" id="preView" style="height: 80px; width: 80px; border-radius: 50px; border: 2px solid #346895; padding: 2px;">
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
                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('Base Salary') !!}
                                {!! Form::text('baseSalary',null,['class'=>'form-control border-radius']) !!}
                                @if($errors->has('baseSalary'))
                                    <span class="text-danger">{{$errors->first('baseSalary')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('Branch Name') !!}
                                {!! Form::select('branch_id',$branch,null,['class'=>'form-control border-radius','placeholder'=>'Please select one' ]) !!}
                                @if($errors->has('branch_id'))
                                    <span class="text-danger">{{$errors->first('branch_id')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('Effect Date') !!}
                                {!! Form::date('effectDate',null,['class'=>'form-control border-radius']) !!}
                                @if($errors->has('effectDate'))
                                    <span class="text-danger">{{$errors->first('effectDate')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('End Date') !!}
                                {!! Form::date('endDate',null,['class'=>'form-control border-radius']) !!}
                                @if($errors->has('endDate'))
                                    <span class="text-danger">{{$errors->first('endDate')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                {!! Form::label('Address') !!}
                                {!! Form::textarea('address',null,['class'=>'form-control border-radius','rows'=>'3',]) !!}
                                @if($errors->has('address'))
                                    <span class="text-danger">{{$errors->first('address')}}</span>
                                @endif
                            </div>
                        </div>
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
            {{--Users Views--}}
            <div class="container-fluid">
                <div class="panel panel-default">
                    <div class="panel-heading">Staff Views</div>
                    <div class="panel-body">
                        <!-- /.box-header -->
                        <div id="tableCustomer">

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div id="editCustomer">

                        </div>
                    </div>
                    <div id="myPopup" class="modal fade" role="dialog">
                        <div id="viewCustomer">

                        </div>
                    </div>

                </div>
            </div>
            {{--End User Views--}}
            </div>
            <div class="panel-footer">

            </div>
        </div>
    </div>
@stop
@section('script')

    <script type="text/javascript">
        var loadFile = function(event) {
            var output = document.getElementById('preView');
            output.src = URL.createObjectURL(event.target.files[0]);
        };
        var loadFileEdit = function(event) {
            var output = document.getElementById('preViewEdit');
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@stop