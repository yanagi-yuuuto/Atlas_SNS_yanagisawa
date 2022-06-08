@extends('layouts.logout')

@section('content')

{!! Form::open(['url' => '/register']) !!}

<p>新規ユーザー登録</p>

{{ Form::label('user name') }}
{{ Form::text('username',null,['class' => 'input']) }}

{{ Form::label('mail adress') }}
{{ Form::email('mail',null,['class' => 'input']) }}

{{ Form::label('password') }}
{{ Form::password('password',['class' => 'input']) }}

{{ Form::label('password-confirm') }}
{{ Form::password('password-confirm',['class' => 'input']) }}

<div class="submit">
{{ Form::submit('REGISTER',['class' => 'submit btn btn-danger']) }}
</div>

<p><a href="/login">ログイン画面へ戻る</a></p>

{!! Form::close() !!}


@endsection
