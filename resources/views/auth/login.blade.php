@extends('layouts.logout')

@section('content')

{!! Form::open(['url' => '/login']) !!}

<p>AtlasSNSへようこそ</p>

{{ Form::label('mail adress','mail adress') }}
{{ Form::text('mail',null,['class' => 'input']) }}
{{ Form::label('password','password') }}
{{ Form::password('password',['class' => 'input']) }}
<div class="submit">
{{ Form::submit('LOGIN',['class' => 'btn btn-danger']) }}
</div>

<p class="register"><a href="/register">新規ユーザーの方はこちら</a></p>

{!! Form::close() !!}

@endsection
