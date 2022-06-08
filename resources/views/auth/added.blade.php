@extends('layouts.logout')

@section('content')

<div id="clear">
  <p>{{ Session::get('user-name') }}さん</p>
  <p>ようこそ！AtlasSNSへ！</p>
  <p>ユーザー登録が完了しました。</p>
  <p>早速ログインをしてみましょう。</p>

  <div class="back-home">
  <p class="btn btn-danger"><a href="/login">ログイン画面へ</a></p>
  </div>
</div>

@endsection
