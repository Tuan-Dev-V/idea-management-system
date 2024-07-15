<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="ja" itemscope itemtype="http://schema.org/Product">
<head prefix="og:http://ogp.me/ns#">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>@yield('title', 'Smart Checkout')</title>
    <meta name="robots" content="noindex">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
</head>
<body ontouchstart="" class="@yield('body_class', 'dashboard content-w116')">

<div id="wrapper">
    @yield('content')
</div><!-- wrapper -->

<!-- Scripts -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

</body>
</html>
