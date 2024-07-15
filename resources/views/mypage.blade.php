@extends('layouts.master')

@section('content')
<div class="content">
  <h2 class="ttl-1">マイページ</h2>

  <form action="{{ route('mypage.update') }}" method="POST">
    @csrf
    <label for="name">名前</label>
    <input type="text" name="name" value="{{ auth()->user()->name }}">
    <div class="error">@error('name'){{ $message }}@enderror</div>

    <label for="email">メールアドレス</label>
    <input type="text" name="email" value="{{ auth()->user()->email }}">

    <div class="btn-wrap">
      <input type="submit" value="変更内容を保存">
      <ul>
        <li><a href="{{ route('password.edit') }}">パスワードを変更する</a></li>
        <li><a href="{{ route('logout') }}">ログアウト</a></li>
      </ul>
    </div>
  </form>
</div>
@endsection
