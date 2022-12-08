@extends('layouts.login')

@section('content')

<div id="search-area">
  <div class="search-box">
    <form action="{{url('/search')}}">
      <input type="text" name="keyword" placeholder="ユーザー名" class="keyword-box" value="{{request('search')}}">
      <input type="image" value="検索" src="images/search.png" class="search-button">
    </form>
    @if($keyword)
      <div class="search-word">
        <p>検索キーワード：{{ $keyword }}</p>
      </div>
    @endif
  </div>
</div>

<div id="search-result">
  @foreach($users as $user)
  @if($user_id != $user->id)
   <div id="user-lineup">
    <div class="user-icon">
      <img src="{{ asset('/storage/' . $user->images) }}" >
    </div>
    <div class="user-name">
     {{$user->username}}
    </div>
    @if(Auth::user()->isFollowing($user->id))
    <div class="follow-button">
      <a href="/search/{{$user->id}}/unfollow_link"><p class="btn btn-danger btn-sm">フォロー解除</p></a>
    </div>
    @else
    <div class="follow-button">
      <a href="/search/{{$user->id}}/follow_link"><p class="btn btn-primary btn-sm">フォローする</p></a>
    </div>
    @endif
   </div>
   @endif
  @endforeach
</div>



@endsection
