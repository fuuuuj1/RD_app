@extends('index_app_mdb')

@section('title', 'RD TOPページ')

@section('content')

    @include('nav')

<div id="all">
      <!-- コンテンツの開始 articleタグで独立させる -->
      <article class="page">
        <!-- メインビジュアル -->
        <div class="page-header">
          <div class="top">
            <div class="top-image"></div>

            <div class="top-title">
              <h1>
                <span>医療従事者の皆様</span>
                <span>被ばく線量</span>
                <span>把握していますか？</span>
              </h1>
            </div>
          </div>
        </div>
        <!-- メインビジュアル終了 -->

        <div class="page-body">
        <!-- Jumbotron サイトの紹介を行う -->
        <div class="jumbotron text-center blue-grey lighten-5" id="feature">

            <!-- Title -->
            <h2 class="card-title h2">何をするためのサイト？</h2>

            {{-- Sub title --}}
            <h5 class="indigo-text my-4 font-weight-bold">放射線を扱う業務に携わる方々の被ばく線量を管理します
            </h5>

            <!-- Grid row -->
            <div class="row d-flex justify-content-center">

                <!-- Grid column -->
                <div class="col-xl-7 pb-2">

                <p class="card-text">記録していただいた毎月の被ばく線量をグラフとして表示します</p>
                <p class="card-text">グラフには年間の線量限度も表示されるので、自身の線量がどの程度なのかを直感的に把握することができます</p>

                </div>
                <!-- Grid column -->

                <!-- Grid row -->
            </div>

                <hr class="my-4 pb-2">

                <div class="row d-flex justify-content-center">

                    <div class="col-xl-7 pb-2">

                    <h5 class="card-text" style="text-align: center">以下の3ステップで、あなたの被ばく線量を把握しましょう。</h5>

                    </div>

                </div>

        </div>

        <!-- Jumbotron -->
        </div>

        <div class="page-body">
          <!-- link list -->

          <section id="link-bnr" class="section-base">
            <ul>
              <li>
                <a href="">
                  <div class="thumb">
                    <img
                        src="{{asset('assets/img/regs-resize.jpg')}}"
                        alt="ノート画像"/>
                  </div>

                  <div class="text">
                    <small>まずはユーザー登録 or ログイン</small>
                    <p>①サイトにログイン</p>
                  </div>
                </a>
              </li>

              <li>
                <a href="">
                  <div class="thumb">
                    <img src="{{asset('assets/img/edit-res.jpg')}}" alt="ボード画像" />
                  </div>

                  <div class="text">
                    <small>次に毎月の被ばく線量を入力</small>
                    <p>②線量の記録</p>
                  </div>
                </a>
              </li>

              <li>
                <a href="">
                  <div class="thumb">
                    <img  src="{{asset('assets/img/chart-res.jpg')}}" alt="チャート画像" />
                  </div>

                  <div class="text">
                    <small>最後に直感的に線量の確認</small>
                    <p>③グラフの確認</p>
                  </div>
                </a>
              </li>
            </ul>
          </section>
          <!-- link list終了 -->
          <!-- サブビジュアルのためにいったんpage-bodyを閉じる -->
        </div>
        <!-- サブビジュアル -->

        <div class="page-header mg-96">
          <div class="sub-content">
            <div class="sub">
              <div class="sub-image"></div>

              <div class="sub-title">
                <h1>
                  <span>ほとんどの方が</span>
                  <span>自身の線量を</span>
                  <span>把握していません</span>
                </h1>
              </div>
            </div>
          </div>
        </div>
        <!-- サブビジュアル終了 -->

        <div class="page-body">
          <!-- サイトで伝えたい事、紹介 -->
          <section class="section-base mg-69">
            <h2 class="title-section">このサイトで伝えたいこと</h2>

            <!-- MDBootstrapの利用 -->

            <!-- Card deck -->
            <div class="card-deck">

              <!-- Card -->
              <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                  <img class="card-img-top" src="{{asset('assets/img/notlook-res.jpg')}}" alt="見ざる聞かざる聞かざるの骨の写真">
                </div>

                <!--Card content-->
                <div class="card-body">

                  <!--Title-->
                  <h4 class="card-title">被ばく線量の把握</h4>
                  <!--Text-->
                  <p class="card-text">線量計を着用しているにも関わらず、自身の線量を把握していない方があまりにも多い。毎月の測定結果に関心を持つこと、線量計の正しい着用場所を知って欲しい。</p>

                </div>

              </div>
              <!-- Card -->

              <!-- Card -->
              <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                  <img class="card-img-top" src="{{asset('assets/img/ctimage-pc.jpg')}}" alt="CTを見ているDrの画像">
                </div>

                <!--Card content-->
                <div class="card-body">

                  <!--Title-->
                  <h4 class="card-title">年間の線量限度を知る</h4>
                  <!--Text-->
                  <p class="card-text">国により、年間の業務上における線量限度が定めたれています。自身の被ばく線量がどの程度なのかを線量限度から把握しましょう。</p>

                </div>

              </div>
              <!-- Card -->

              <!-- Card -->
              <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                  <img class="card-img-top" src="{{asset('assets/img/medical-team_res.jpg')}}" alt="医療チームの姿の画像">
                </div>

                <!--Card content-->
                <div class="card-body">

                  <!--Title-->
                  <h4 class="card-title">放射線との関わり方</h4>
                  <!--Text-->
                  <p class="card-text">放射線は目に見えないため、知識がなければ恐ろしく感じます。当サイトでは放射線について知るためのサイトや書籍を紹介しているので、参考にしてください</p>

                </div>

              </div>
              <!-- Card -->

            </div>
            <!-- Card deck -->

        </div>
      </article>

      <!-- link block -->

      <div id="link-block">
        <div class="left">
          <div class="record">
            <a href="{{route('RD.record')}}">
              <strong>Record</strong>
              <small>線量の記録をする</small>
            </a>
          </div>
          <div class="contact">
            <a href="{{route('Chart.index')}}">
              <strong>Chart</strong>
              <small>線量記録をグラフ表示</small>
            </a>
          </div>
        </div>

        <div class="right">
          <div class="reference">
            <label for="trigger">
              <div class="ref-bg"></div>
              <div class="inner">
                <strong>Reference</strong>
                <p>参考となるサイトや書籍の紹介</p>
              </div>
            </label>
          </div>
        </div>
      </div>

      <!-- link block終了 -->
    </div>

    @include('footer')

@endsection
