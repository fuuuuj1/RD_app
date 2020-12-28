<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    @yield('title')
  </title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('assets/css/new-visual.css' ,$is_production)}}">
  {{-- 初回訪問時のモーダル展開 --}}
  <link rel="stylesheet" href="{{asset('assets/css/toppage-modal.css' ,$is_production)}}">
  <link rel="stylesheet" href="{{asset('assets/css/first-view-modal.css' ,$is_production)}}">

</head>

<body>


    {{-- お知らせモーダル --}}
    <div id="layer_board_area" tabindex="-1" class="modal_notice">
        <div class="modal-sandbox"></div>

        <div class="modal-box">

            <div class="modal-header_notice">
                <div class="mdl_btn_close">&#10006;</div>
                <h1>ご確認をお願いします</h1>
            </div>

            <div class="modal-body_notice">
                <p>このサイトは<span style="font-size: 1.2rem; font-weight:bold">職業被ばく</span>を管理するためのサイトになります<br>
                業務の関係上、止むを得ず被ばくをする<span style="font-weight: bold">医療従事者向け</span>の被ばく線量の管理サイトです</p>

                <p><br>レントゲンやCTなどの検査における<span style="font-weight: bold">医療被ばく</span>を管理するためのサイトではないことをご承知ください</p>

                <hr>
                <p>職業被ばく・・・作業者が自らの仕事の結果として被る被ばくのこと<br></p>
                <br>
                <p>医療被ばく・・・医療施設において検査や治療のためにする被ばく</p>
                <br>
                <a class="mdl_btn_close square_btn" href="#">閉じる</a>

            @guest
                <hr>
                <div class="modal-guest_notice">
                <p style="font-weight: bold">採用担当者様はこちらのボタンからゲストログインをお願いします</p>
                <br>

                <a class="mdl_btn_close square_btn" href="{{url('/login/guest', null ,$is_production)}}">ゲストログイン</a>
                </div>
            @endguest

            </div>


        </div>

    </div>
    {{-- お知らせモーダル終了 --}}

    @include('ref_modal')

    <div id="app2">
        @yield('content')
    </div>


  {{-- 作成したjsファイルの読み込み --}}
  <script src="{{ mix('js/app.js') }}"></script>
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  {{-- JQueryでCookieを扱うためのファイル --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>

  {{-- モーダル展開のためのファイル --}}
  <script src="{{asset('assets/js/jquery-modalLayerBoard.js' ,$is_production)}}"></script>

  {{-- モーダル展開をコントロールするための記述 --}}
  <script>
      //デフォルト設定
    $(function(){
        $('#layer_board_area').layerBoard();
    })


    //動きやアクセス回数を制御する場合は以下のように記述して数値を変える
    // $(function(){
    //     $('#layer_board_area').layerBoard({
    //         delayTime: 200,		//表示までの待ち時間
    //         fadeTime : 500,		//表示開始から表示しきるまでの時間
    //         alpha : 0.8,		//背景レイヤーの透明度
    //         limitMin : 0,		//何分経過後に再度表示するか/分（0で再表示なし）
    //         easing: 'linear',		//イージング
    //         limitCookie : 0	,	//cookie保存期間/日（0で開くたび毎回表示される）
    //         countCookie : 1000	//何回目のアクセスまで適用するか(cookie保存期間でリセット)
    //     });
    // })
  </script>

  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>

</body>

</html>
