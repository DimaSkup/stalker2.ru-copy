@extends('base')

@section('content')
<div class="container" style="background-color: white;">
    <div class="row justify-content-center">
        <div class="">
            <div class="">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    {{-- this is a register form --}}
                    {!! Form::open(
                        [
                            'route'     => 'register',
                            'method'    => 'post',
                        ],
                        ['class' => ''])
                    !!}
                    @csrf

                    {{-- an input name field --}}
                    <div class="form-group row">
                        {!! Form::label('name', __('Name'), ['class' => 'control-label']) !!}

                        <div class="">
                            {!! Form::text('name', null,
                                 [
                                     'class'         => 'form-control',
                                     'placeholder'   => '',
                                 ])
                            !!}
                        </div>

                        @error('name')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                        @enderror
                    </div>

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

                    {{-- an input password-confirm field --}}
                    <div class="form-group row">
                        {!! Form::label('password-confirm',  __('Confirm Password'), ['class' => 'control-label']) !!}

                        <div class="">
                            {!! Form::password('password_confirmation', null,
                                 [
                                     'class'         => 'form-control',
                                     'placeholder'   => '',
                                 ])
                            !!}
                        </div>
                    </div>

                    {{-- a submit button --}}
                    <div class="form-group row mb-0">
                        {!! Form::submit( __('Register'),
                            [
                                'class' => 'btn btn-primary',

                            ])
                        !!}
                    </div>

                    {{-- the end of the register form --}}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
