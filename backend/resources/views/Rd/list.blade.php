@extends('list_app')

@section('title', '線量記録リスト')

@section('content')

<div class="page-body">
          <!-- 記録リストページ -->
    <section class="section-base mg-69">
    <h1 class="title-section">記録リスト</h1>

    <div class="card-columns">

        @foreach($exposures as $exposure)
        {{-- cardの開始 --}}
        <div class="card mb-4">
            {{-- Headerで登録している年、月の表示 --}}
            <div class="card-header bg-transparent border-success">
                {{$exposure->year. "年". $exposure->month. "月"}}

                {{-- 編集用のリンクアイコンと削除用のアイコンを表示する --}}
                <span class="list-title-icon">
                    <i class="far fa-edit"></i>
                    <i class="far fa-trash-alt"></i>
                </span>
            </div>

            {{-- 体部線量と頸部線量の表示 --}}
            <div class="card-body">
                {{-- dose_bodyがnullの時は・・・？ バリデーションでnullではなく0と記入してもらうようにする？--}}
                <h5 class="card-title">
                    {{"体部線量・・・". $exposure->dose_body. "mSv"}}
                </h5>

                {{-- neck doseが空の値でないなら表示 空であるなら空白を表示する --}}
                @if (isset($exposure->dose_neck))
                <h5 class="card-title">
                    {{"頭部線量・・・". $exposure->dose_neck. "mSv"}}
                </h5>
                @else
                <h5 class="card-title"><br></h5>
                @endif

            </div>
            {{-- card bottomの部分 --}}
            <div class="card-bottom">

                <button type="button" class="btn m-0 p-1" data-toggle="collapse" data-target="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-chevron-circle-down"></i>
                </button>
                {{-- 後ほど入力されたコメントを表示する コメントなければplaceholderの表示 特記事項を入力とか --}}
                <span class="list-footer-comment">テストコメント</span>
            </div>

                {{-- アコーディオン部分 --}}
                <div class="collapse" id="collapseExample">
                <list-comment></list-comment>
                </div>


        </div>
        @endforeach

    </div>

        <div class="paginate">
            {{ $exposures->links() }}
        </div>


    </section>

</div>
@endsection
