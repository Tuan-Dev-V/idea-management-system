@extends('layouts.manager')

@section('title', 'detail')

@section('content')

        <section class="sec">
            <div class="content">
                <div class="ttl-wrap">
                    <h2 class="ttl-1">受領したアイデア</h2>
                    <div class="sort pc">
                        <select name="絞り込み">
                            <option value="全て表示" selected>全て表示</option>
                            <option value="サービス改善">サービス改善</option>
                            <option value="セキュリティ対策">セキュリティ対策</option>
                            <option value="新サービス企画">新サービス企画</option>
                        </select>
                    </div>
                </div>

                <ul class="idea-li">
                    <li class="head pc">
                        <div>名前</div>
                        <div>ステータス</div>
                    </li>
                    @foreach($ideas as $idea)
                        <li>
                            <a href="#">
                                <span class="ttl">
                                    <h3>{{ $idea->name }}</h3>
                                    <div class="name">{{ $idea->author }}</div>
                                    <span class="date">{{ $idea->created_at }}　{{ $idea->category }}</span>
                                </span>
                                <span class="status b-{{ $idea->status->color }}">{{ $idea->status->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

    @endsection
