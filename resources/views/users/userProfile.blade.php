@extends('layouts.login')

@section('content')
<div id="ff-listbox" style="height: auto;">

   <div class="other-icon">
     <img src="{{ asset('/storage/' . $user->images) }}" >
  </div>
  <div class="other-list">
        <p>name</p>
        <p>bio</p>
  </div>
  <div class="other-info">
    <p>{{ $user->username }}</p>
    <p>{{ $user->bio }}</p>
  </div>
  <div class="btn-area">
    @if(Auth::user()->isFollowing($user->id))
    <div class="follow-button" style="top: 115px; left: 124px;">
      <a href="/user_profile/{{$user->id}}/unfollow_link"><p class="btn btn-danger btn-sm">フォロー解除</p></a>
    </div>
    @else
    <div class="follow-button" style="top: 115px; left: 9px;">
      <a href="/user_profile/{{$user->id}}/follow_link"><p class="btn btn-primary btn-sm">フォローする</p></a>
    </div>
    @endif
  </div>
</div>
<div id="other-postarea">
  @foreach($posts as $post)
  <div class="other-post">
   <div class="lineup-icon">
         <img src="{{ asset('/storage/' . $post->user->images) }}" >
   </div>
   <div class="lineup-post">
         <p>{{ $post->user->username }}</p>
         <p>{{ $post->post }}</p>
   </div>
   <div class="lineup-date">
         <p> {{ $post->created_at }}</p>
   </div>
  </div>
 @endforeach
</div>
@endsection
