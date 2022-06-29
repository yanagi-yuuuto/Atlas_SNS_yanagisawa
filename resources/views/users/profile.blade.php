@extends('layouts.login')

@section('content')

<div id="profile-edit">

<div id="icon-image">
<img src="images/icon1.png">
</div>

<div id="edit-form">
{!! Form::open(['url' => '/profile']) !!}

{{ Form::label('user name') }}
{{ Form::text('username',null,['class' => 'input']) }}

{{ Form::label('mail adress') }}
{{ Form::email('mail',null,['class' => 'input']) }}

{{ Form::label('password') }}
{{ Form::password('password',['class' => 'input']) }}

{{ Form::label('password confirm') }}
{{ Form::password('password-confirm',['class' => 'input']) }}

{{ Form::label('bio') }}
{{ Form::text('bio',null,['class' => 'input']) }}

{{ Form::label('icon image') }}
{{ Form::file('image',null,['class' => 'input']) }}

{{ Form::submit('更新',['class' => 'submit btn btn-danger']) }}

{!! Form::close() !!}
</div>

</div>
@endsection
