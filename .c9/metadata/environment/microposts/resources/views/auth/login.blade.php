{"filter":false,"title":"login.blade.php","tooltip":"/microposts/resources/views/auth/login.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":27,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"text-center\">","        <h1>Log in</h1>","    </div>","","    <div class=\"row\">","        <div class=\"col-md-6 col-md-offset-3\">","","            {!! Form::open(['route' => 'login.post']) !!}","                <div class=\"form-group\">","                    {!! Form::label('email', 'Email') !!}","                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}","                </div>","","                <div class=\"form-group\">","                    {!! Form::label('password', 'Password') !!}","                    {!! Form::password('password', ['class' => 'form-control']) !!}","                </div>","","                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}","            {!! Form::close() !!}","","            <p>New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>","        </div>","    </div>","@endsection"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":27,"column":11},"end":{"row":27,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1589556167014,"hash":"d9a6d3f0a75619992dd429a64f842786cc8ab33a"}