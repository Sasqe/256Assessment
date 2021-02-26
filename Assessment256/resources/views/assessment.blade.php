@extends('layouts.app')

@section('content')
<!-- 
//Chris King
//2/26/2020
//Assessment blade file
 -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Assessment') }}</div>

                <div class="card-body">
                    <form method="POST" action='doPost'>
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('username') is-invalid @enderror" name="firstname" placeholder="{{Session::get('firstName') }}" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="{{Session::get('lastName') }}" value="{{ old('lastname') }}" required autocomplete="lastname">

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="{{Session::get('userName') }}" required autocomplete="new-address">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="{{Session::get('passWord') }}" required autocomplete="password">
                            </div>
                        </div>
                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Post Data') }}
                                </button>
                            </div>
                        </div>
 
                    </form>
                @if (Session::has('valid') && Session::get('valid') == 1)
                <input id="result" type="text" class="form-control" name="result" placeholder="Authenticated!" required autocomplete="result">
                @elseif (Session::has('valid') && Session::get('valid') != 1)
                 <input id="result" type="text" class="form-control" name="result" placeholder="Failure" required autocomplete="result">
                 @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

