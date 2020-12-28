<header id="header">

    <nav class="navbar navbar-expand-lg navbar-dark black" id="header-nav">

        <div class="container">

            <strong id="header-logo">
            <a class="navbar-brand" href="{{ url('/', null ,$is_production)}}">Radiation Dosimeter</a>
            </strong>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">


                <ul class="navbar-nav nav-center">

                @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/register', null ,$is_production)}}">ユーザー登録</a>
                        </li>

                        <li class="nav-item nav-center">
                            <a class="nav-link" href="#feature">機能の紹介</a>
                        </li>

                        <li class="nav-item nav-center">
                            <label class="nav-link" for="trigger" style="margin-bottom: 0 !important">参考サイト</label>
                        </li>
                @endguest

                @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/chart', null ,$is_production)}}">グラフ表示</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/RD/create', null ,$is_production)}}">線量の記録</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/list', null ,$is_production)}}">線量の編集</a>
                        </li>

                        <li class="nav-item">
                            <label class="nav-link" for="trigger">参考サイト</label>
                        </li>

                @endauth
                </ul>
                {{-- </div> --}}

                <ul class="navbar-nav nav-right">

                @guest
                    <li class="nav-item nav-login">
                        <a class="nav-link" href="{{url('/login', null ,$is_production)}}">ログイン</a>
                    </li>
                    <li class="nav-item nav-login">
                        <a class="nav-link" href="{{url('/login', null ,$is_production)}}">ゲスト</a>
                    </li>
                @endguest

                @auth
                        <form id="logout-button" method="POST" action="{{route('logout')}}">
                @csrf
                        <li class="nav-item nav-login nav-right">
                                <button class="nav-link" type="submit" form="logout-button"
                                href="{{route('logout')}}"
                                style="background-color:transparent;cursor:pointer;"
                                >ログアウト
                        </li>
                </form>
                @endauth

                @guest
                    <li class="nav-item nav-login nav-right">
                        <button class="layer_board_btn nav-link" style="background-color:transparent !important;cursor:pointer; border"> お知らせ</button>
                    </li>
                @endguest

                {{-- @auth
                <li class="nav-item nav-contact nav-right">
                    <a class="nav-link" href="#">コンタクト</a>
                </li>
                @endauth --}}
                {{-- </div> --}}

                </ul>


            </div>
        </div>
    </nav>

</header>

{{-- <script>
    $(document).ready(function() {
        $('#no-waves .dropdown').removeClass('waves-effect');
    });
</script> --}}
