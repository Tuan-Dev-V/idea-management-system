<!DOCTYPE html>
<html lang="ja" itemscope itemtype="http://schema.org/Product">
<head prefix="og:http://ogp.me/ns#">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">

<title>@yield('title', 'Smart Checkout')</title>
<meta name="robots" content="noindex">

<link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
</head>

<body ontouchstart="" class="@yield('body_class', 'default-class')">


<div id="wrapper">


<nav class="nav-1">
  <div class="content">
    <a class="logo" href="{{ url('index.html') }}"><img src="{{ asset('images/logo.png') }}" alt="Smart Checkout"></a>

    <ul class="nav-li">
      <li class="pc"><a href="{{ url('idea.html') }}"><img src="{{ asset('images/ico-idea.svg') }}" alt="">アイデア</a></li>
      <li class="pc"><a class="blue" href="{{ url('mypage.html') }}"><img src="{{ asset('images/ico-mypage_b.svg') }}" alt="">マイページ</a></li>
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

<nav class="nav-3 sp">
  <a href=""><img src="{{ asset('images/ico-dashboard.svg') }}" alt="ダッシュボード"></a>
  <a href=""><img src="{{ asset('images/ico-idea.svg') }}" alt="アイデア"></a>
  <a href=""><img src="{{ asset('images/ico-analysis.svg') }}" alt="傾向と分析"></a>
  <a href=""><img src="{{ asset('images/ico-mypage_b.svg') }}" alt="マイページ"></a>
</nav>


@yield('content')


</div><!-- wrapper -->


<!-- js -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

</body>
</html>
