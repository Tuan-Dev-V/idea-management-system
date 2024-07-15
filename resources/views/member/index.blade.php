@extends('layout.member.layout')

@section('title', 'Post')

@section('content')

@section('content')
  <section class="sec">
    <div class="content">
      <div class="ttl-wrap">
        <h2 class="ttl-1">投稿したアイデア</h2>
        <a class="n-btn pc" href="{{ route('member.post.create') }}">＋新規作成</a>
      </div>

      <ul class="idea-li">
        <li class="head pc">
          <div>名前</div>
          <div>ステータス</div>
        </li>
        @foreach ($ideas as $idea)
        <li>
          <a href="{{ route('member.post.show', $idea->id) }}">
            <span class="ttl">
              <h3>{{ $idea->title }}</h3>
              <span class="date">{{ $idea->created_at->format('Y/m/d') }}</span>
            </span>
            <span class="status {{ $idea->status->name }}">{{ $idea->status->name }}</span>
          </a>
        </li>
        @endforeach
      </ul>
    </div>
  </section>
@endsection

