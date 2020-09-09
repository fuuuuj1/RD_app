@extends('app_mdb')

@section('title', 'パスワード再設定')

@section('content')

<div class="email-reset-content">

    <div class="row register-form">

        <div class="col-md-8 offset-md-2">

            <form class="custom-form" method="POST" action="{{route('password.email')}}">
                @csrf
                <h1>パスワードの再設定</h1>
                @include('error_message')

                @if (session('status'))
                <div class="card-text alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <div class="form-row form-group">


                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="email-input-field">メールアドレス</label>
                    </div>

                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="email" id="email" name="email" required>
                    </div>

                </div>
                <button class="btn btn-light submit-button" type="submit"
                style="background: #6caee0 !important;">メール送信</button>
            </form>

        </div>

    </div>

</div>

@endsection
