@extends('app')

@section('title', 'パスワード再設定')

@section('content')

<div class="email-reset-content">

    <div class="row register-form">

      <div class="col-md-8 offset-md-2">

        <div class="icon-box">
            <a href="{{route('RD.index')}}">
                <i class="far fa-times-circle fa-2x"></i>
                <span class="close-message" style="font-size: small">閉じる</span>
            </a>
        </div>

      <form class="custom-form" method="POST" action="{{route('password.update')}}">
        @csrf

        <input type="hidden" name="email" value="{{ $email }}">
        <input type="hidden" name="token" value="{{ $token }}">

          <h1>新しいパスワードの設定</h1>
          @include('error_message')

          <div class="form-row form-group">

            <div class="col-sm-4 label-column">
              <label class="col-form-label" for="password">新しいパスワード</label>
            </div>

            <div class="col-sm-6 input-column">
              <input class="form-control" type="password" name="password" id="password" required />
            </div>

          </div>

          <div class="form-row form-group">

            <div class="col-sm-4 label-column">
              <label class="col-form-label" for="pawssword_confirmation">パスワード(再入力)
              </label>
            </div>

            <div class="col-sm-6 input-column">
              <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" required/>
            </div>

          </div>
          <button class="btn btn-light submit-button" type="submit">送信</button>
        </form>

      </div>

    </div>

</div>

@endsection
