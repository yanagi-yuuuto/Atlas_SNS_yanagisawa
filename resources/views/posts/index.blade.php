@extends('layouts.login')

@section('content')

<div id="post-area">
  <img src="images/icon1.png">

  {!! Form::open(['url' => '/top']) !!}

  {{ Form::textarea('post',null,['class' => 'post-form' , 'placeholder' => '投稿内容を入力してください。' , 'maxlength' => '150']) }}
  {{ Form::image('images/post.png','submit',['class' => 'submit-image']) }}

  {!! Form::close() !!}

  </div>

   @foreach($posts as $post)
 <div class="post-lineup">
  <tr class="lineup-area">
   <td>
      <div class="lineup-icon">
         <img src="images/icon1.png" >
      </div>
      <div class="lineup-post">
          <p>{{ $post->user->username }}</p>
          <p>{{ $post->post }}</p>
      </div>
      <div class="lineup-date">
         <p> {{ $post->created_at }}</p>
         <div class="edits-image">
            <div class="edits-edit">
               <a href="" post="{{ $post->post }}" post_id="{{ $post->id }}"><img src="images/edit.png"></a>
            </div>
            <div class="edits-trash">
               <a href=""><img src="images/trash.png"></a>
            </div>
         </div>
      </div>
   </td>
  </tr>
 </div>
  @endforeach

   <!-- モーダルの中身 -->
    <div class="modal js-modal">
        <div class="modal__bg js-modal-close"></div>
        <div class="modal__content">
           <form action="" method="">
                <textarea name="" class="modal_post"></textarea>
                <input type="hidden" name="" class="modal_id" value="">
                <input type="submit" value="更新">
                {{ csrf_field() }}
           </form>
           <a class="js-modal-close" href="">閉じる</a>
        </div>
    </div>

  @endsection
