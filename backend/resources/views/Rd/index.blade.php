@extends('app')

@section('title', 'TOPページ')

@section('content')

 @include('nav')

<div class="top-page">
    <main>
        <div class="row">
            <div class="col">
                <div></div>
            </div>
        </div>

    <div class="row" style="margin: auto -15px">

        <div class="col-md-6 col-lg-7 offset-lg-0"
             style="margin: 0 auto; margin-right: auto; margin-left: auto; width: 100%;">

        <div class="d-lg-flex justify-content-lg-center container"></div>

        <p class="top-text" style="color: rgb(223, 232, 238); font-size: 25px; margin-top: 30%;
               margin-left: 5%; line-height: 40px;">
          あなたは自身の被ばく線量を把握していますか？<br />毎月の被ばく線量を把握して、日々の業務を安全に従事するために<br>当サイトをご活用ください
        </p>

        @guest
        <div
        class="d-flex d-md-flex d-lg-flex justify-content-md-center align-items-lg-center top-link"
        style="width: 100%; margin-top: 70px; margin-right: auto; margin-left: auto;
              padding-right: auto; padding-left: auto;">

          <a class="btn btn-light" role="button"
            style="margin-right: auto; margin-left: auto; color: #ffffff; background-color: #6caee0;"
            href="{{route('login')}}">ログイン</a>

        </div>

        <div
            class="d-flex d-md-flex d-lg-flex justify-content-md-center justify-content-lg-center top-link"
            style="margin-top: 21px; margin-right: auto; margin-left: auto; width: 100%;">

          <a class="btn btn-light d-lg-flex justify-content-lg-center top-btn" role="button"
          style="margin-right: auto; margin-left: auto; text-align: center; background-color: #6caee0;
                color: #ffffff;"
              href="{{route('register')}}"
              >ユーザー登録</a>
        </div>
        @endguest

        @auth
        <div
        class="d-flex d-md-flex d-lg-flex justify-content-md-center align-items-lg-center top-link"
        style="width: 100%; margin-top: 70px; margin-right: auto; margin-left: auto;
              padding-right: auto; padding-left: auto;">

          <a class="btn btn-light" role="button"
            style="margin-right: auto; margin-left: auto; color: #ffffff; background-color: #6caee0;"
            href="#">マイページ</a>

        </div>

        <div
            class="d-flex d-md-flex d-lg-flex justify-content-md-center justify-content-lg-center top-link"
            style="margin-top: 21px; margin-right: auto; margin-left: auto; width: 100%;">

          <a class="btn btn-light d-lg-flex justify-content-lg-center top-btn" role="button"
          style="margin-right: auto; margin-left: auto; text-align: center; background-color: #6caee0;
                color: #ffffff;"
              href="{{route('RD.record')}}"
              >線量の記録</a>
        </div>
        @endauth

        </div>
        <div class="col">
            <div></div>
        </div>
    </div>
    </main>

</div>

@endsection
