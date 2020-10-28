@extends('new_app_mdb')

@section('title', 'RD TOPページ')

@section('content')

    @include('new-nav')

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
          <!-- link list -->

          <section id="link-bnr" class="section-base">
            <ul>
              <li>
                <a href="">
                  <div class="thumb">
                    <img
                        src="{{asset('assets/img/record-res.jpg')}}"
                        alt="線量記録のノート画像"
                    />
                  </div>

                  <div class="text">
                    <small>毎月の線量を入力</small>
                    <p>線量記録へ</p>
                  </div>
                </a>
              </li>

              <li>
                <a href="">
                  <div class="thumb">
                    <img src="{{asset('assets/img/chart-res.jpg')}}" alt="グラフの画像" />
                  </div>

                  <div class="text">
                    <small>直感的に線量を確認</small>
                    <p>グラフページへ</p>
                  </div>
                </a>
              </li>

              <li>
                <a href="">
                  <div class="thumb">
                    <img src="{{asset('assets/img/edit-res.jpg')}}" alt="ボード画像" />
                  </div>

                  <div class="text">
                    <small>記録の修正</small>
                    <p>記録の編集</p>
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
            <h2 class="title-section">このサイトの思い</h2>

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
                  <h4 class="card-title">Card title</h4>
                  <!--Text-->
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>

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
                  <h4 class="card-title">Card title</h4>
                  <!--Text-->
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>

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
                  <h4 class="card-title">Card title</h4>
                  <!--Text-->
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>

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
            <a href="">
              <strong>Record</strong>
              <small>線量の記録をする</small>
            </a>
          </div>
          <div class="contact">
            <a href="">
              <strong>Contact</strong>
              <small>お問い合わせ</small>
            </a>
          </div>
        </div>

        <div class="right">
          <div class="reference">
            <a href="">
              <div class="ref-bg"></div>
              <div class="inner">
                <strong>Reference</strong>
                <p>参考となるサイトや書籍の紹介</p>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!-- link block終了 -->
    </div>

    @include('footer')

@endsection
