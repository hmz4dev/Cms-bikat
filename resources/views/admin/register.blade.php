@extends('layouts.app')
 <!-- Bootstrap Core CSS -->

 <link href="{{asset('css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
  
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/css/all.css')}}" rel="stylesheet" >
@section('content')

      
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-4 col-md-offset-4 ">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">{{ __('Register') }}</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('register.user') }}">
                        @csrf

                        <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Add Status</label>

                            <div class="col-md-8">
                                <select name="statut" id="" class="form-control">
                                    <option value="adminaccess"   {{ (old('statut')== 'adminaccess' )? 'selected' : '' }}>adminaccess</option>
                                    <option value="teacheraccess" {{ (old('statut')== 'teacheraccess' )? 'selected' : '' }}>teacheraccess</option>
                                </select>
                                @if ($errors->has('statut'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/metisMenu.min.js')}}"></script>
    <script src="{{asset('js/raphael.min.js')}}"></script>
    <script src="{{asset('js/morris.min.js')}}"></script>
    <script src="{{asset('js/sb-admin-2.js')}}"></script>
</div>
@endsection
