@extends('layout.member.layout')

@section('title', 'Post')

@section('content')
  <section class="sec bg-pale">
    <div class="content">
      <input class="title" type="text" placeholder="投稿タイトル">
      <textarea class="message" placeholder="本文を入力"></textarea>
    </div>
  </section>
@endsection
