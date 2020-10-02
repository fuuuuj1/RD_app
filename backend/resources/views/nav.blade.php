<nav
    class="navbar navbar-light navbar-expand-md bg-light navigation-clean"
    style="padding: 10px">

    <div class="container">
        <a class="navbar-brand text-success" href="/"
        >Radiation<br />Dosimeter</a>
        <button
        data-toggle="collapse"
        class="navbar-toggler"
        data-target="#navcol-1">

        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
        </button>

        {{-- ナビバーに表示する項目をログイン状態により切り替える --}}
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">

        @guest
                <li class="nav-item" role="presentation">
                <a class="nav-link" href="{{route('login')}}">ログイン</a>
                </li>
        @endguest

        @guest
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{route('register')}}">ユーザー登録</a>
                </li>
        @endguest

        @auth
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#">マイページ</a>
                </li>
        @endauth

        @auth
        <form id="logout-button" method="POST" action="{{route('logout')}}">
        @csrf
            <li class="nav-item" role="presentation">
                <button class="nav-link" type="submit" form="logout-button"
                href="{{route('logout')}}"
                style="border:0px;background-color:transparent;cursor:pointer;"
                >ログアウト</a>
            </li>
        </form>
        @endauth

            </ul>
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation">
                <a class="nav-link" href="#">コンタクト</a>
                </li>
            </ul>
        </div>
        <a href="#"></a>
    </div>
    </nav>
