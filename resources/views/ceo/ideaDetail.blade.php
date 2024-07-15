@extends('layouts.layout')

@section('content')
<div class="idea-detail detail content-w116">

  <div id="wrapper">

    @include('layouts.nav')

    <nav class="nav-2">
      <div class="content">
        <a class="back-btn" href="{{ route('ceo.idea.index') }}">一覧に戻る</a>
      </div>
    </nav>

    <ul id="js-tab" class="list-tab sp">
      <li class="active">アイデア詳細</li>
      <li>AIに聞く</li>
    </ul>


    <section class="sec bg-pale">
      <div class="content">

        <div class="tab-content detail-wrap active">
          <h2 class="ttl-1">医療現場の感染対策へのニーズに、ソリューション提案で応える</h2>
          <div class="date">2024/05/01　山田 太郎</div>
           <p>
        医療現場における感染対策は、従来から重視されてきたテーマです。さまざまな場面に潜む感染リスクをいかにして未然に防ぐか、どの医療機関においても検討され、対策が行われてきました。病院内で感染対策を適切に行うには、院内の動線やゾーニングの設計やリソース配分の面で患者さんを受け入れるための態勢の構築、感染防止や環境整備に関わるルールの運用徹底など、複雑で多岐にわたる課題が存在します。<br>
        <br>
        しかし、このたびの新型コロナウイルス感染症（COVID-19）の拡大により、感染リスクはより的確に迅速に対処しなければ医療機関の機能や経営をも揺るがしかねない課題となりました。テルモは、コロナ禍によってさらに意識が高まっている感染対策の一助となるべく、ホスピタルカンパニーを中心に「感染対策イニシアチブ」を立ち上げ、課題の抽出から運用、フォローに至るまで、総合的なソリューション提案に力を入れています。<br>
        <br>
        病院がその機能を維持するためには普遍的で基本的な感染対策が必要であり、「標準予防策」が最も重要と言われています。標準予防策とは、平時から、すべての患者さん・家族、医療従事者に対して用いる、基礎的な感染対策で、患者さんの体液や排泄物、傷のある皮膚や粘膜を感染の可能性のある物質とみなして対応することを指します。<br>
        <br>
        今回のCOVID-19の感染拡大により、医療機関では改めてこの標準予防策の重要性を再認識することとなりました。中でも手指衛生は感染性病原体の伝播を減少させる特に重要な対策である一方、常に多忙な医療現場で周知徹底することが難しい現状がありました。テルモは、手指消毒剤を始めとする、手指衛生に貢献する製品を提供するとともに、院内の運用の徹底に向け、感染対策の推進を担う医療従事者と連携して院内の課題を洗い出し、教育の工夫や徹底のためのトレーニングを一緒に作り上げていく活動を進めています。<br>
      </p>
        </div>

        <div class="tab-content ai-wrap">
          <ul class="chat">
            <li class="your-message">
              <p>
                デジタル技術の導入と運用コストについて、課題を3つ簡潔に要点をおらせして教えて
              </p>
            </li>
            <li class="ai-message">
              <img class="icon" src="{{ asset('images/ico-ai.png') }}" alt="AIアイコン">
              <p>
                1. 高初期投資<br>
                最新のデジタル技術を導入するためには、設備やソフトウェアの購入、インフラ整備などに多額の初期投資が必要です。<br>
                <br>
                2. 継続的なメンテナンスとアップデート<br>
                導入後も機器やソフトウェアのメンテナンス、定期的なアップデートが必要であり、これには継続的な費用がかかります。<br>
                <br>
                3. スタッフのトレーニング<br>
                新しい技術を効果的に活用するためには、スタッフのトレーニングが不可欠であり、これも時間とコストがかかります。<br>
              </p>
            </li>
            <li class="your-message">
              <p>
                ありがとうございます
              </p>
            </li>
            <li class="ai-message">
              <img class="icon" src="{{ asset('images/ico-ai.png') }}" alt="AIアイコン">
              <p>
                どうしたしまして！他に何かお手伝いできることがあれば、いつでもお知らせください。
              </p>
            </li>
          </ul>

          <div class="send-message bg-pale">
            <form>
              <textarea placeholder="テキストを入力"></textarea>
              <button type="submit"><img src="{{ asset('images/ico-submit.svg') }}" alt="送信"></button>
            </form>
            <small>回答は必ずしも正しいとは限りません。重要な情報は確認するようにしてください。</small>
          </div>
        </div>

      </div>
    </section>


    <!-- モーダルウィンドウの中身 -->
    <div id="remand" class="modal js-modal reason-modal">
      <div class="modal_bg js-modal-close"></div>
      <div class="modal_content">
        <a class="js-modal-close close-btn" href=""><img src="{{ asset('images/modal-close.svg') }}" alt="閉じる"></a>
        <form action="{{ route('ceo.idea.remand') }}" method="POST">
          @csrf
          <label>このアイデアを差戻しする理由</label>
          <textarea name="remark" placeholder="差戻し理由を入力"></textarea>
          <input class="b-red" type="submit" value="承認を確定する">
        </form>
      </div>
    </div>


    <div id="approval" class="modal js-modal reason-modal">
      <div class="modal_bg js-modal-close"></div>
      <div class="modal_content">
        <a class="js-modal-close close-btn" href=""><img src="{{ asset('images/modal-close.svg') }}" alt="閉じる"></a>
        <form action="{{ route('ceo.idea.approval') }}" method="POST">
          @csrf
          <label>このアイデアを承認する理由</label>
          <textarea name="remark" placeholder="承認理由を入力"></textarea>
          <input class="b-green" type="submit" value="承認を確定する">
        </form>
      </div>
    </div>
    <!-- // モーダルウィンドウの中身 -->

  </div><!-- wrapper -->


  <!-- js -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>

@endsection
