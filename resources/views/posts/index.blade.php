@extends('layouts.login')

@section('content')

<div id="post-area">
  <img src="{{ asset('/storage/' . $login_user->images) }}" >

  {!! Form::open(['url' => '/top']) !!}

  {{ Form::textarea('post',null,['class' => 'post-form' , 'placeholder' => '投稿内容を入力してください。' , 'maxlength' => '150']) }}
  {{ Form::image('images/post.png','submit',['class' => 'submit-image']) }}

  {!! Form::close() !!}
  @if ($errors->has('post'))
  <p class="errors">{{$errors->first('post')}}</p>
  @endif

  </div>

@foreach($posts as $post)
 <div class="post-lineup">
  <tr class="lineup-area">
   <td>
      <div class="lineup-icon">
         <img src="{{ asset('/storage/' . $post->user->images) }}" >
      </div>
      <div class="lineup-post">
          <p>{{ $post->user->username }}</p>
          <p>{{ $post->post }}</p>
      </div>
      <div class="lineup-date">
         <p> {{ $post->created_at }}</p>
        @if($user_id == $post->user->id)
         <div class="edits-image">
            <div class="edits-edit">
               <a href="" post="{{ $post->post }}" post_id="{{ $post->id }}" class="js-modal-open"><img src="images/edit.png"></a>
            </div>
            <div class="edits-trash">
               <a href="/top/{{ $post->id }}/delete"  onclick="return confirm('こちらの投稿を削除してもよろしいでしょうか？')">
               <img class="trash" src="images/trash.png">
               <img class="trash-hover" src="images/trash-h.png">
               </a>
            </div>
         </div>
        @endif
      </div>
   </td>
  </tr>
 </div>
 @endforeach

   <!-- モーダルの中身 -->
    <div class="modal js-modal">
        <div class="modal__bg js-modal-close"></div>
        <div class="modal__content">
           <form action="/top/update" method="post">
                <textarea name="update-post" maxlength="150" required class="modal_post"></textarea>
                <input type="hidden" name="update-id" class="modal_id" value="">
                <input type="image" src="images/edit.png" class="edits-update">
                {{ csrf_field() }}
           </form>
           <a class="js-modal-close" href="">閉じる</a>
        </div>
    </div>

  @endsection
