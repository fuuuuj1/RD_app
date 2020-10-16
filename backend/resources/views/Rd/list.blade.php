@extends('new_app_mdb')

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

                {{-- 編集用のリンクアイコンと削除用のアイコンを表示する --}}
                <i class="far fa-edit"></i>
                <i class="far fa-trash-alt"></i>
            </div>

         </div>

        @endforeach

    </div>

    </section>
</div>
@endsection
