@extends('layouts.login')

@section('content')

<div id="post-area">
  <img src="images/icon1.png">

  {!! Form::open(['url' => '/top']) !!}

  {{ Form::textarea('post',null,['class' => 'post-form' , 'placeholder' => '投稿内容を入力してください。']) }}
  {{ Form::image('images/post.png','submit',['class' => 'submit-image']) }}

  {!! Form::close() !!}

  </div>
@endsection
