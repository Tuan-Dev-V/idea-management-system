@extends('layouts.ceo')

@section('title', 'アイデア')

@section('content')


  <div class="content">
    <div class="dash-box">
      <h2 class="ttl-1">アイデア一覧</h2>

      <div class="sort-2">
        <button class="accttl">2024年7月</button>
        <ul class="accshow">
          <li><a href="">2024年5月</a></li>
          <li><a href="">2024年4月</a></li>
          <li><a href="">2024年3月</a></li>
        </ul>
        <div class="close-bg"></div>
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
        @foreach ($ideas as $idea)
        <li>
          <a href="#">
            <span class="ttl">
              <h3>{{ $idea->title }}</h3>
              <span class="date">{{ $idea->created_at->format('Y/m/d') }}　{{ $idea->category }}</span>
              <span class="name"><span class="sp">投稿者</span>{{ $idea->user->name }}</span>
              <span class="authorizer"><span class="sp">承認者</span>高島 花子</span>
            </span>
          </a>
        </li>
        @endforeach
      </ul>
    </div>

    <div class="dash-box">
      <h2 class="ttl-1">2024年7月の投稿アイデアの傾向</h2>
      <p>
        最近のアイデアにおける傾向分析によれば、患者満足度向上を目指す取り組みが顕著な成果を示しています。特に待ち時間削減策やオンライン治療計画の提案などが、患者の関心を引き付けています。また、セキュリティを強化するデータ保護の提案も注目を集めており、プライバシーに対する懸念が高まる中で、施設の信頼性を高める効果が期待されます。これらの傾向から、今後は患者満足度向上やセキュリティ対策に重点を置いたアイデアの展開が期待されます。<br>
        <br>
        最近のアイデアにおける傾向分析によれば、患者満足度向上を目指す取り組みが顕著な成果を示しています。特に待ち時間削減策やオンライン治療計画の提案などが、患者の関心を引き付けています。また、セキュリティを強化するデータ保護の提案も注目を集めており、プライバシーに対する懸念が高まる中で、施設の信頼性を高める効果が期待されます。これらの傾向から、今後は患者満足度向上やセキュリティ対策に重点を置いたアイデアの展開が期待されます。<br>
      </p>
    </div>
  </div>


@endsection
