@extends('main')

@section('mail')

<div class="container">
  <h2>Welcome to the site {{$name}}</h2>
  <br/>
  Your registered email-id is {{$email}}
</div>

@endsection
