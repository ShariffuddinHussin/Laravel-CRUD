@extends('main')
@section('register')

  {!! Form::open(['route' => 'auth.store']) !!}

  <div class="container">

    {!! Form::label('name','Register') !!}

    <br/>

    {!! Form::label('name', 'Your Name') !!}

    <div class="textbox">
      {!! Form::text('name') !!}
    </div>

    <br/>

    {!! Form::label('email', 'E-mail Address') !!}

    <div class="textbox">
      {!! Form::text('email') !!}
    </div>

    <br/>

    {!! Form::label('password', 'Password') !!}

    <div class="textbox">
      {!!  Form::password('password') !!}
    </div>

    <br/>
    {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

    {!! Form::close() !!}

@endsection
