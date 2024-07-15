@extends('layouts.app_ceo')

@section('title', '傾向と分析')

@section('content')

<div id="wrapper">

<nav class="nav-1">
  <div class="content">
    <a class="logo" href="{{ url('/ceo/dashboard') }}"><img src="{{ asset('images/logo.png') }}" alt="Smart Checkout"></a>

    <ul class="nav-li tab-s">
      <li class="pc"><a href="{{ url('/ceo/dashboard') }}"><img src="{{ asset('images/ico-dashboard.svg') }}" alt="ダッシュボード">ダッシュボード</a></li>
      <li class="pc"><a href="{{ url('/ceo/idea') }}"><img src="{{ asset('images/ico-idea.svg') }}" alt="アイデア">アイデア</a></li>
      <li class="pc"><a class="blue" href="{{ url('/ceo/report') }}"><img src="{{ asset('images/ico-analysis_b.svg') }}" alt="傾向と分析">傾向と分析</a></li>
      <li class="pc"><a href="{{ url('/ceo/mypage') }}"><img src="{{ asset('images/ico-mypage.svg') }}" alt="マイページ">マイページ</a></li>
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
  <a href="{{ url('/ceo/dashboard') }}"><img src="{{ asset('images/ico-dashboard.svg') }}" alt="ダッシュボード"></a>
  <a href="{{ url('/ceo/idea') }}"><img src="{{ asset('images/ico-idea.svg') }}" alt="アイデア"></a>
  <a href="{{ url('/ceo/report') }}"><img src="{{ asset('images/ico-analysis_b.svg') }}" alt="傾向と分析"></a>
  <a href="{{ url('/ceo/mypage') }}"><img src="{{ asset('images/ico-mypage.svg') }}" alt="マイページ"></a>
</nav>


<section class="sec bg-pale">
	<div class="content">
    
    <div class="dash-box">
      <div class="period-wrap">
        <h2 class="ttl-1">分析と傾向</h2>
        
        <div class="period">
          <div class="sort-2">
            <button class="accttl">2024年7月</button>
            <ul class="accshow">
              <li><a href="">2024年5月</a></li>
              <li><a href="">2024年4月</a></li>
              <li><a href="">2024年3月</a></li>
            </ul>
            <div class="close-bg"></div>
          </div>
          <div>〜</div>
          <div class="sort-2">
            <button class="accttl">2024年7月</button>
            <ul class="accshow">
              <li><a href="">2024年5月</a></li>
              <li><a href="">2024年4月</a></li>
              <li><a href="">2024年3月</a></li>
            </ul>
            <div class="close-bg"></div>
          </div>
        </div>
      </div>

      <div class="tag-wrap">
        <a class="tag active" href="">全てのカテゴリー</a>
        <a class="tag" href="">業務改善</a>
        <a class="tag" href="">サービス改善</a>
        <a class="tag" href="">セキュリティ対策</a>
        <a class="tag" href="">新サービス企画</a>
      </div>
      <ul class="idea-li ceo-idea-li">
        <li class="head">
          <div><span class="pc">名前　</span>全3件を表示中</div>
          <div class="pc">投稿者</div>
          <div class="pc">承認者</div>
        </li>
        <li>
          <a href="#">
            <span class="ttl">
              <h3>患者満足度向上のための待ち時間削減策</h3>
              <span class="date">2024/05/01　サービス改善</span>
              <span class="name"><span class="sp">投稿者</span>山田 太郎</span>
              <span class="authorizer"><span class="sp">承認者</span>高島 花子</span>
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="ttl">
              <h3>セキュリティを強化するデータ保護の対策と新サービスの提案</h3>
              <span class="date">2024/04/01　セキュリティ対策</span>
              <span class="name"><span class="sp">投稿者</span>島田 京介</span>
              <span class="authorizer"><span class="sp">承認者</span>高地面 花子</span>
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="ttl">
              <h3>治療時間のオンライン共有</h3>
              <span class="date">2024/03/01　サービス改善</span>
              <span class="name"><span class="sp">投稿者</span>長谷部 馨</span>
              <span class="authorizer"><span class="sp">承認者</span>高地面 花子</span>
            </span>
          </a>
        </li>
      </ul>
    </div>
    
    <div class="dash-box">
      <h2 class="ttl-1">2024年4月から2024年7月の投稿アイデアの傾向</h2>
      <p>
        最近のアイデアにおける傾向分析によれば、患者満足度向上を目指す取り組みが顕著な成果を示しています。特に待ち時間削減策やオンライン治療計画の提案などが、患者の関心を引き付けています。また、セキュリティを強化するデータ保護の提案も注目を集めており、プライバシーに対する懸念が高まる中で、施設の信頼性を高める効果が期待されます。これらの傾向から、今後は患者満足度向上やセキュリティ対策に重点を置いたアイデアの展開が期待されます。<br>
        <br>
        最近のアイデアにおける傾向分析によれば、患者満足度向上を目指す取り組みが顕著な成果を示しています。特に待ち時間削減策やオンライン治療計画の提案などが、患者の関心を引き付けています。また、セキュリティを強化するデータ保護の提案も注目を集めており、プライバシーに対する懸念が高まる中で、施設の信頼性を高める効果が期待されます。これらの傾向から、今後は患者満足度向上やセキュリティ対策に重点を置いたアイデアの展開が期待されます。<br>
      </p>
    </div>
    
    <div class="dash-box">
      <h2 class="ttl-1">カテゴリーの傾向</h2>
      <div class="tag-wrap">
        <a class="tag" href="">業務改善</a>
        <a class="tag" href="">サービス改善</a>
        <a class="tag" href="">セキュリティ対策</a>
        <a class="tag" href="">新サービス企画</a>
      </div>
    </div>
    
    <div class="dash-box">
      <h2 class="ttl-1">キーワードと分析</h2>
      <ul class="keyword-analysis">
        <li>
          <h3>#待ち時間削減</h3>
          <p>
            待ち時間は医療機関における患者満足度に直接影響を与える重要な要因です。多くの患者が長時間の待ち時間に対して不満を持ち、それが医院の評価低下につながる場合があります。現代の患者は効率を求めており、特に繁忙な都市部では、時間の無駄を極力避けたいというニーズが高まっています。そのため、待ち時間の削減は、患者のストレス軽減と医院のサービス改善のために非常に重要なアプローチとなります。
          </p>
        </li>
        <li>
          <h3>#定期的なセキュリティ監査</h3>
          <p>
            医療業界では患者の個人情報が大量に扱われるため、データのセキュリティは極めて重要です。データ漏洩は法的責任や信頼の失墜に直結し、医院にとって重大な損失を意味します。近年、サイバーセキュリティの脅威が増加している中、定期的なセキュリティ監査によりリスクを管理し、患者情報を保護することが医院の義務とされています。このような背景から、セキュリティ対策の強化が必要不可欠となっています。
          </p>
        </li>
        <li>
          <h3>#パーソナライズされたサービス</h3>
          <p>
            現代の消費者はパーソナライズされたサービスを期待しています。医療業界でも、患者一人ひとりの具体的なニーズや状況に合わせたカスタマイズされた治療計画が求められています。パーソナライズされた治療は、患者の満足度を向上させるだけでなく、治療の成果を最大化することにも繋がります。個々の患者に焦点を当てたサービス提供は、患者との信頼関係を築く上で非常に効果的であり、それにより患者のリテンション率の向上が期待されます。
          </p>
        </li>
      </ul>
    </div>

	</div>
</section>


</div><!-- wrapper -->


<!-- js -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>


</body>
</html>
