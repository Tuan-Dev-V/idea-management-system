@extends('layout.member.layout')

@section('title', 'Post')

@section('content')
<div id="wrapper">

<nav class="nav-1">
  <div class="content">
    <a class="logo" href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="Smart Checkout"></a>

    <ul class="nav-li">
      <li class="pc"><a href="{{ route('home') }}"><img src="{{ asset('images/ico-idea.svg') }}" alt="">アイデア</a></li>
      <li class="pc"><a href="{{ route('mypage') }}"><img src="{{ asset('images/ico-mypage.svg') }}" alt="">マイページ</a></li>
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

<nav class="nav-2">
  <div class="content">
    <ul class="nav-li">
      <li><a class="active" href="{{ route('postView') }}">投稿する</a></li>
      <li><a href="{{ route('ai') }}">AIに聞く</a></li>
    </ul>
    <div class="btn-wrap">
      <a class="n-btn b-wh" href="#">一時保存</a>
      <a class="n-btn" href="#">提出する</a>
    </div>
  </div>
</nav>

<!-- <nav class="nav-3 sp">
  <a href="{{ route('home') }}"><img src="{{ asset('images/ico-idea.svg') }}" alt="アイデア"></a>
  <a class="nav-plus" href="{{ route('postView') }}"><img src="{{ asset('images/ico-plus.svg') }}" alt="新規作成"></a>
  <a href="{{ route('mypage') }}"><img src="{{ asset('images/ico-mypage.svg') }}" alt="マイページ"></a>
</nav> -->


<section class="sec bg-pale">
	<div class="content">
    <h2 class="ttl-1">医療現場の感染対策へのニーズに、ソリューション提案で応える</h2>
    <p>
      医療現場における感染対策は、従来から重視されてきたテーマです。さまざまな場面に潜む感染リスクをいかにして未然に防ぐか、どの医療機関においても検討され、対策が行われてきました。病院内で感染対策を適切に行うには、院内の動線やゾーニングの設計やリソース配分の面で患者さんを受け入れるための態勢の構築、感染防止や環境整備に関わるルールの運用徹底など、複雑で多岐にわたる課題が存在します。<br>
      <br>
      しかし、このたびの新型コロナウイルス感染症（COVID-19）の拡大により、感染リスクはより的確に迅速に対処しなければ医療機関の機能や経営をも揺るがしかねない課題となりました。テルモは、コロナ禍においてさらに意識が高まっている感染対策の一助となるべく、ホスピタルカンパニーを中心に「感染対策イニシアチブ」を立ち上げ、課題の抽出から運用、フォローに至るまで、総合的なソリューション提案に力を入れています。<br>
      <br>
      病院がその機能を維持するためには普遍的で基本的な感染対策が必要であり、「標準予防策」が最も重要と言われています。標準予防策とは、平時から、すべての患者さん・家族、医療従事者に対して用いる、基礎的な感染対策で、患者さんの体液や排泄物、傷のある皮膚や粘膜を感染の可能性のある物質とみなして対応することを指します。<br>
      <br>
      今回のCOVID-19の感染拡大により、医療機関では改めてこの標準予防策の重要性を再認識することとなりました。中でも手指衛生は感染性病原体の伝播を減少させる特に重要な対策である一方、常に多忙な医療現場で周知徹底することが難しい現状がありました。テルモは、手指消毒剤を始めとする、手指衛生に貢献する製品を提供するとともに、院内の運用の徹底に向け、感染対策の推進を担う医療従事者と連携して院内の課題を洗い出し、教育の工夫や徹底のためのトレーニングを一緒に作り上げていく活動を進めています。<br>
    </p>
    
	</div>
</section>


</div><!-- wrapper -->


<!-- js -->
<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>


</body>
</html>
