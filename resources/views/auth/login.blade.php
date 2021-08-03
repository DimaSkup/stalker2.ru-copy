@extends('base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: white;">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    {{-- this is a login form--}}
                    {!! Form::open(
                        [
                            'route'     => 'login',
                            'method'    => 'post',
                        ],
                        ['class' => ''])
                    !!}
                    @csrf

                    {{-- an input email field --}}
                    <div class="form-group row">
                        {!! Form::label('email', __('E-Mail Address'), ['class' => 'control-label']) !!}

                        <div class="">
                            {!! Form::email('email', null,
                               [
                                   'class'         => 'form-control',
                                   'placeholder'   => '',
                               ])
                            !!}
                        </div>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    {{-- an input password field --}}
                    <div class="form-group row">
                        {!! Form::label('password', __('Password'), ['class' => 'control-label']) !!}

                        <div class="">
                            {!! Form::password('password', null,
                                [
                                    'class'         => 'form-control',
                                    'placeholder'   => '',
                                ])
                            !!}
                        </div>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror

                    </div>

                    {{-- a "Remember me" checkbox --}}
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                {!! Form::checkbox('remember', 'checked', old('remember') ? 'checked' : '',
                                    [
                                        'id'    => 'remember',
                                        'class' => 'form-check-input',
                                    ])
                                !!}

                                {!! Form::label('remember', __('Remember Me'), ['class' =>'form-check-label']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <a class="" style="color: black;" href="{{ route('register') }}">
                            Haven't registered yet?
                        </a>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            {!! Form::submit(__('Login'),
                                [
                                    'class'     => "btn btn-primary",
                                ])
                            !!}

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <a class="logo" href="{{ route('auth-google') }}">
                            <img src="{{ asset('images/logo/logo-google.png') }}" alt="logo-google.svg">
                        </a>
                    </div>

                    {{-- the end of the login form --}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
