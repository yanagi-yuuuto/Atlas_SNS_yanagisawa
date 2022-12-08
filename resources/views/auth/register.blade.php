@extends('layouts.logout')

@section('content')

{!! Form::open(['url' => '/register']) !!}

<p>新規ユーザー登録</p>

{{ Form::label('user name') }}
{{ Form::text('username',null,['class' => 'input']) }}
@if ($errors->has('username'))
  <p class="errors">{{$errors->first('username')}}</p>
@endif

{{ Form::label('mail address') }}
{{ Form::email('mail',null,['class' => 'input']) }}
@if ($errors->has('mail'))
  <p class="errors">{{$errors->first('mail')}}</p>
@endif

{{ Form::label('password') }}
{{ Form::password('password',['class' => 'input']) }}
@if ($errors->has('password'))
  <p class="errors">{{$errors->first('password')}}</p>
@endif

{{ Form::label('password-confirm') }}
{{ Form::password('password_confirmation',['class' => 'input']) }}
@if ($errors->has('password'))
  <p class="errors">{{$errors->first('password')}}</p>
@endif

<div class="submit">
{{ Form::submit('REGISTER',['class' => 'submit btn btn-danger']) }}
</div>

<p><a href="/login">ログイン画面へ戻る</a></p>

{!! Form::close() !!}


@endsection
