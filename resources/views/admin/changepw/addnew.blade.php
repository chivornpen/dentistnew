@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">User Change New Password</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif 
                        {!!Form::open()!!}
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <input id="password-confirm" type="submit" class="form-control btn btn-success" name="btn_sub" value="Add New">
                                </div>
                                <div class="col-md-4">
                                    
                                </div>
                                <div class="col-md-4">
                                    <input id="password-confirm" type="submit" class="form-control btn btn-default" name="btn_close" value="close">
                                </div>
                            </div>
                        {!!Form::close()!!}        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection