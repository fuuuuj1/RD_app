{{-- footer導入部 グレーエリアを配置する --}}
<div class="gray-area"></div>


<!-- Footer -->
<footer class="page-footer font-small black pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row footer-content" id="footer">

      <!-- Grid column -->
      <div class="col-md-4 mt-md-0 mt-4 footer-inner-content">

        <!-- Content -->
            <a href="#header">
                <h5 class="footer-title">Radiation Dosimeter</h5>
            </a>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none hr-color">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3 footer-inner-content">

        <!-- Links -->

        <ul class="list-unstyled footer-link">
        @guest
          <li class="footer-login">
            <a href="{{url('/login', null ,$is_production)}}">ログイン</a>
          </li>
          <li class="footer-login">
            <a href="{{url('/login', null ,$is_production)}}">ゲストログイン</a>
          </li>
          <li>
            <a href="{{url('/register', null ,$is_production)}}">ユーザー登録</a>
          </li>
        @endguest

        @auth
          <form id="logout-button" method="POST" action="{{route('logout')}}">
                @csrf
                        <li class="footer-logout">
                                <button class="nav-link" type="submit" form="logout-button"
                                href="{{url('/logout', null ,$is_production)}}" style="boder:none;background-color:transparent;cursor:pointer;">ログアウト
                        </li>
            </form>
        @endauth
          <li>
            <a href="{{route('password.request')}}">パスワードの再設定</a>
          </li>
          {{-- <li>
            <a href="#!">ユーザー情報の変更</a>
          </li> --}}
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none hr-color">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3 footer-inner-content">

        <!-- Links -->

        <ul class="list-unstyled footer-link">
          <li>
            <a href="{{url('/RD/create', null ,$is_production)}}">線量の記録</a>
          </li>
          <li>
            <a href="{{url('/list', null ,$is_production)}}">記録の編集</a>
          </li>
          <li>
            <a href="{{url('/chart', null ,$is_production)}}">グラフ表示</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none hr-color">

      <!-- Grid column -->
      <div class="col-md-2 mb-md-0 mb-2 footer-inner-content">

        <!-- Links -->

        <ul class="list-unstyled footer-link">
          {{-- <li>
            <a href="#!">コンタクト</a>
          </li> --}}
          <li>
            <label for="trigger">参考サイト</label>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#header">radiationdosimeter.tech</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
