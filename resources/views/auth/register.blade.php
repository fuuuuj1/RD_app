@extends('app_mdb')

@section('title', 'ユーザー登録')

@section('content')

<div class="register-content">

    <div class="row register-form">



        <div class="col-md-8 offset-md-2 form-field">

            <div class="icon-box">
                <a href="{{route('RD.index')}}">
                    <i class="far fa-times-circle fa-2x"></i>
                    <span class="close-message" style="font-size: small">閉じる</span>
                </a>
            </div>

            <form class="custom-form" method="POST" action="{{route('register')}}">
                @csrf

                <h1>ユーザー登録</h1>
                @include('error_message')
                <div class="form-row form-group">

                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="lastname-input-field">姓 (Last name)</label>
                    </div>

                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="lastname" required value="{{old('lastname')}}">
                    </div>
                </div>

                <div class="form-row form-group">

                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="firstname-input-field">名 (First name)</label>
                    </div>

                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="firstname" required value="{{old('firstname')}}">
                        </div>

                </div>

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
                        <label class="col-form-label" for="gender-input-field">性別</label>
                    </div>

                    <div class="col-lg-2">

                        <div class="custom-control custom-radio" style="padding-top: 7px;padding-bottom: 7px;">
                            <input type="radio" id="gender-men" class="custom-control-input" name="gender" value="male">
                            <label class="custom-control-label" for="gender-men" style="padding-top: 1px;">男
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="custom-control custom-radio" style="padding-top: 7px;padding-bottom: 7px;">
                            <input type="radio" id="gender-female" class="custom-control-input" name="gender" value="female">
                            <label class="custom-control-label" for="gender-female" style="padding-top: 1px;">女
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="age-input-field">年齢</label>
                    </div>

                    <div class="col-sm-1 input-column">
                            <input class="form-control" type="text" name="age" required value="{{old('age')}}">
                    </div>
                </div>

                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="dropdown-input-field">職業&nbsp;</label>
                    </div>

                    <div class="col-sm-4 col-md-6 input-column">

                        <select class="form-control" name="job_id">
                        <optgroup label="職業">
                            <option value="1">診療放射線技師</option>
                            <option value="2">看護師</option>
                            <option value="3">臨床検査技師</option>
                            <option value="4">臨床工学技士</option>
                            <option value="5">医師</option>
                            <option value="6">理学療法士</option>
                            <option value="7">その他</option>
                        </optgroup>
                        </select>

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

                <div class="form-row form-group">

                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="repeat-pawssword-input-field">パスワード (再入力)&nbsp;</label>
                    </div>

                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="password" name="password_confirmation" required>
                    </div>

                </div>
                <button class="btn btn-light submit-button" type="submit"
                style="background: #6caee0 !important;" >登録</button>
            </form>
        </div>
     </div>

</div>
@endsection
