@extends('layouts.app')

@section('custom_style_headers')
    <style>
        .body{
            background-color: #0b2e13;
        }
    </style>
@endsection

@section('content')
    <div class="col-lg-5 col-md-5 form-custom">
            <div class="modal-login">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Sign in</h4>
                    </div>
                    <div class="modal-body">
                        {{Form::open(array('url' => 'login', 'method' => 'post'))}}
                            {{Form::email_custom('email','', ['placeholder'=> 'Email'])}}
                            {{Form::psw('password', array('placeholder' => 'Password'))}}
                            {{Form::submit('Login', ['class'=> 'btn btn-primary btn-block btn-lg'])}}
                        {!! Form::close() !!}

                    </div>
                    <div class="modal-footer">
                        <a href="/sign_up">You don't have an account</a>
                    </div>
                </div>
            </div>


    </div>
@endsection
