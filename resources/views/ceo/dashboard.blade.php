@extends('layouts.ceo')

@section('content')
<!-- wrapper -->
<div id="wrapper">


<nav class="nav-1">
  <div class="content">
    <a class="logo" href="{{ url('/ceo/dashboard') }}"><img src="{{ asset('images/logo.png') }}" alt="Smart Checkout"></a>

    <ul class="nav-li tab-s">
      <li class="pc"><a class="blue" href="{{ url('/ceo/dashboard') }}"><img src="{{ asset('images/ico-dashboard_b.svg') }}" alt="">ダッシュボード</a></li>
      <li class="pc"><a href="{{ url('/ceo/idea') }}"><img src="{{ asset('images/ico-idea.svg') }}" alt="">アイデア</a></li>
      <li class="pc"><a href="{{ url('/ceo/report') }}"><img src="{{ asset('images/ico-analysis.svg') }}" alt="">傾向と分析</a></li>
      <li class="pc"><a href="{{ url('/ceo/mypage') }}"><img src="{{ asset('images/ico-mypage.svg') }}" alt="">マイページ</a></li>
      <li class="nav-news">
        <button class="accttl"><img src="{{ asset('images/ico-news.svg') }}" alt="お知らせ"></button>
        <ul class="accshow">
          <li>
            <p><b>「治療時間のオンライン共有」</b>のアイデアが<b class="green">承認</b>されました。</p>
            <div class="date">2024/03/01</div>
          </li>
          <li>
            <p><b>「リマインダーサービスの提案」</b>のアイデアが<b class="red">不採用</b>になりました。</p>
            <div class="date">2024/03/01</div>
          </li>
        </ul>
        <div class="close-bg"></div>
      </li>
    </ul>
  </div>
</nav>

<!-- <nav class="nav-2">
  <div class="content">
    <ul class="nav-li">
      <li><a class="active" href="{{ url('/ceo/post') }}">投稿する</a></li>
      <li><a href="{{ url('/ceo/ai') }}">AIに聞く</a></li>
    </ul>
    <div class="btn-wrap">
      <a class="n-btn b-wh" href="#">一時保存</a>
      <a class="n-btn" href="#">提出する</a>
    </div>
  </div>
</nav> -->

<nav class="nav-3 sp">
  <a href="{{ url('/ceo/dashboard') }}"><img src="{{ asset('images/ico-dashboard_b.svg') }}" alt="ダッシュボード"></a>
  <a href="{{ url('/ceo/idea') }}"><img src="{{ asset('images/ico-idea.svg') }}" alt="アイデア"></a>
  <a href="{{ url('/ceo/report') }}"><img src="{{ asset('images/ico-analysis.svg') }}" alt="傾向と分析"></a>
  <a href="{{ url('/ceo/mypage') }}"><img src="{{ asset('images/ico-mypage.svg') }}" alt="マイページ"></a>
</nav>


<section class="sec bg-pale">
	<div class="content">

<|cursor|>
	</div>
</section>

</div><!-- wrapper -->

@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@endsection
