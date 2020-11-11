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

                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga aliquid dolorem ea distinctio exercitationem delectus qui, quas eum architecto, amet quasi accusantium, fugit consequatur ducimus obcaecati numquam molestias hic itaque accusantium doloremque laudantium, totam rem aperiam.</p>

                </div>
                <!-- Grid column -->

                <!-- Grid row -->
            </div>

                <hr class="my-4 pb-2">

                <div class="row d-flex justify-content-center">

                    <div class="col-xl-7 pb-2">

                    <h5 class="card-text" style="text-align: center">以下の3ステップにより、あなたの被ばく線量を直感的に把握することができます。</h5>

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
