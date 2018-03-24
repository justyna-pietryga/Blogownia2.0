@extends('layouts.app')

@section('content')
    <div class="col-lg-5 col-md-5 form-custom">
        <div class="modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sign up</h4>
                </div>
                <div class="modal-body">
                    {{Form::open(array('url' => 'register', 'method' => 'post'))}}
                    {{Form::login('name','', ['placeholder'=> 'Username'])}}
                    {{Form::email_custom('email','', ['placeholder'=> 'Email'])}}
                    {{Form::psw('password', array('placeholder' => 'Password'))}}
                    {{Form::psw('password_confirmation', array('placeholder' => 'Repeat password'))}}
                    {{Form::submit('Login', ['class'=> 'btn btn-primary btn-block btn-lg'])}}
                    {!! Form::close() !!}

                </div>
                <div class="modal-footer">
                    <a href="/sign_in">You already have an account</a>
                </div>
            </div>
        </div>


    </div>
@endsection
