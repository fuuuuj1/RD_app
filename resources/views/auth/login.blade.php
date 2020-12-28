@extends('app_mdb')

@section('title', 'ログイン')

@section('content')

<div class="login-content">


    <div class="row register-form">

        <div class="col-md-8 offset-md-2 form-field">

            <div class="icon-box">
                <a href="{{route('RD.index')}}">
                    <i class="far fa-times-circle fa-2x"></i>
                    <span class="close-message" style="font-size: small">閉じる</span>
                </a>
            </div>

            <form class="custom-form" method="POST" action="{{route('login')}}">
                @csrf

                <h1>ログイン</h1>

                @include('error_message')

                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="email-input-field">メールアドレス</label>
                    </div>

                    <div class="col-sm-6 input-column">
                    <input class="form-control" type="email" name="email" required value="{{old('email')}}">
                    </div>
                </div>

                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="pawssword-input-field">パスワード</label>
                    </div>

                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="password" name="password" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                    <a class="forgot" href="{{route('password.request')}}" style="color: #8f8f8f;">パスワードを忘れた方はこちら</a>
                    </div>
                </div>

                <div class="form-row guest-login">
                    <div class="col">
                    <a class="forgot" href="{{url('/login/guest', null ,$is_production)}}" style="color: #8f8f8f;">採用担当者様はこちらからログインをお願いします</a>
                    </div>
                </div>

                {{-- 次回からのログインを自動にする typeをhiddenにすることで隠している --}}
                <input type="hidden" name="remember" id="remember" value="on">

                <button class="btn btn-light submit-button" type="submit"
                style="background: #6caee0 !important;">ログイン</button>

            </form>

        </div>

    </div>

</div>

@endsection
