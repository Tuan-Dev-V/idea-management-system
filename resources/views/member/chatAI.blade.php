@extends('layout.member.layout')

@section('title', 'Post')

@section('content')
<section class="sec bg-pale">
  <div class="content">
    <ul class="chat">
      <li class="your-message">
        <p>
          {{ __('デジタル技術の導入と運用コストについて、課題を3つ簡潔に要点をおさせて教えて') }}
        </p>
      </li>
      <li class="ai-message">
        <img class="icon" src="{{ asset('images/ico-ai.png') }}" alt="AI">
        <p>
          1. {{ __('高初期投資') }}<br>
          {{ __('最新のデジタル技術を導入するためには、設備やソフトウェアの購入、インフラ整備などに多額の初期投資が必要です。') }}<br>
          <br>
          2. {{ __('継続的なメンテナンスとアップデート') }}<br>
          {{ __('導入後も機器やソフトウェアのメンテナンス、定期的なアップデートが必要であり、これには継続的な費用がかかります。') }}<br>
          <br>
          3. {{ __('スタッフのトレーニング') }}<br>
          {{ __('新しい技術を効果的に活用するためには、スタッフのトレーニングが不可欠であり、これも時間とコストがかかります。') }}<br>
        </p>
      </li>
      <li class="your-message">
        <p>
          {{ __('ありがとうございます') }}
        </p>
      </li>
      <li class="ai-message">
        <img class="icon" src="{{ asset('images/ico-ai.png') }}" alt="AI">
        <p>
          {{ __('どういたしまして！他に何かお手伝いできることがあれば、いつでもお知らせください。') }}
        </p>
      </li>
    </ul>
  </div>

  <div class="send-message bg-pale">
    <div class="content">
      <form>
        <textarea placeholder="{{ __('テキストを入力') }}"></textarea>
        <button type="submit"><img src="{{ asset('images/ico-submit.svg') }}" alt="send"></button>
      </form>
      <small>{{ __('回答は必ずしも正しいとは限りません。重要な情報は確認するようにしてください。') }}</small>
    </div>
  </div>
</section>
@endsection

