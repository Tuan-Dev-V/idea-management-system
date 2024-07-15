<!DOCTYPE html>
<html lang="ja" itemscope itemtype="http://schema.org/Product">
<head prefix="og:http://ogp.me/ns#">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">

<title>Smart Checkout</title>
<meta name="robots" content="noindex">

<link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}"  />
<link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}"  />
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"  />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
</head>

<body ontouchstart="" class="password-reset">


<div id="wrapper">


<nav class="nav-1">
  <div class="content">
    <a class="logo" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="Smart Checkout"></a>

  </div>
</nav>



<section class="sec">
	<div class="content">
    <h2 class="ttl-1">パスワードを変更する</h2>
    
    <form class="form">
      <label>登録済のメールアドレス</label>
      <input type="text" name="" value="yamada@sco.co.jp">

      <input class="w21" type="submit" value="再発行用メールを送信">
    </form>
	</div>
</section>


</div><!-- wrapper -->


<!-- js -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>


</body>
</html>
