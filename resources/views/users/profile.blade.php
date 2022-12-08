@extends('layouts.login')

@section('content')

<div id="profile-edit">

 <div id="icon-image">
 <img src="{{ asset('/storage/' . $user->images) }}" >
 </div>


 {!! Form::open(['url' => '/profile' , 'files' => true]) !!}
  <div id="edit-form">
    <div class="profile-label">
     {{ Form::label('username','user name',['class' => 'input-label']) }}
     {{ Form::label('mail','mail address',['class' => 'input-label']) }}
     {{ Form::label('password','password',['class' => 'input-label']) }}
     {{ Form::label('password-confirm','password confirm',['class' => 'input-label']) }}
     {{ Form::label('bio','bio',['class' => 'input-label']) }}
     {{ Form::label('icon image','icon image',['class' => 'input-label']) }}
    </div>

    <div class="profile-data">
     {{ Form::text('username',$user->username,['class' => 'input-profile']) }}
     @if ($errors->has('username'))
      <p class="profile-error">{{$errors->first('username')}}</p>
     @endif
     {{ Form::email('mail',$user->mail,['class' => 'input-profile']) }}
     @if ($errors->has('mail'))
      <p class="profile-error">{{$errors->first('mail')}}</p>
     @endif
     {{ Form::password('password',['class' => 'input-profile']) }}
     {{ Form::password('password_confirmation',['class' => 'input-profile']) }}
     @if ($errors->has('password'))
     <p class="profile-error">{{$errors->first('password')}}</p>
     @endif
     {{ Form::text('bio',$user->bio,['class' => 'input-profile']) }}
     <label class="input-file">
     {{ Form::file('image') }} <p>ファイルを選択</p><div style="text-align: center;"><span class="files-name">選択されていません</span></div>
     </label>
    </div>
  </div>
 {{ Form::submit('更新',['class' => 'submit btn btn-danger upload-button']) }}
 {!! Form::close() !!}
</div>


@endsection
