@extends('layouts.login')

@section('content')
<div id="ff-listbox">
  <div class="ff-title">
    <p>Follower list</p>
  </div>
  @foreach($users as $user)
  <div class="ff-icon">
    <a href="/user_profile/{{ $user->id }}">
     <img src="{{ asset('/storage/' . $user->images) }}" >
    </a>
  </div>
  @endforeach
</div>
<div id="ff-postbox">
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
      </div>
   </td>
  </tr>
  </div>
  @endforeach
</div>
@endsection
