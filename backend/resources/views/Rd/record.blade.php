@extends('app')

@section('title', '線量の記録')

@section('content')

<div class="record-content">

    <div class="row register-form">
    @include('error_message')



    <div class="col-md-8 offset-md-2 form-field">

        <div class="icon-box">
            <a href="{{route('RD.index')}}">
                <i class="far fa-times-circle fa-2x"></i>
                <span class="close-message" style="font-size: small">閉じる</span>
            </a>
        </div>

        <form class="custom-form" action="{{route('RD.store')}}" method="POST">
            @csrf

            <h1>線量の記録</h1>

            {{-- 重複入力がされた際にエラーメッセージを表示する --}}
            @if (session('message'))
                <div class="card-text text-lest alert alert-danger">
                    <ul class="mb-0">
                        <li style="list-style: none">{{ session('message') }}</li>
                    </ul>
                </div>
            @endif

            <div class="form-row form-group">


                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="pawssword-input-field">測定した年、月</label>
                    </div>

                    <div class="col-sm-4 col-lg-2 input-column">
                        <input class="form-control" type="text" placeholder="年" inputmode="numeric" required
                        name="year">
                    </div>

                    <div class="col-sm-2 input-column">

                        <select class="custom-select my-1 mr-sm-2 form-control" id="inlineFormCustomSelect" name="month">
                            <option selected>月</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>

                    </div>



                </div>

                <div class="form-row form-group">

                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="dropdown-input-field">着用部位</label>
                    </div>

                    <div class="col-sm-3 input-column">

                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="position_id">
                            <option selected>選択してください</option>
                            <option value="1">胸部</option>
                            <option value="2">腹部</option>
                            <option value="3">胸部 + 頸部</option>
                            <option value="4">腹部 + 頸部</option>
                        </select>

                    </div>

                </div>

                <div class="form-row form-group">

                    <div class="col-sm-4 label-column">
                        <label class="col-form-label">線量(胸部または腹部)</label>
                    </div>

                    <div class="col-sm-6 col-lg-4 input-column">
                        <input class="form-control" type="text" placeholder="mSv" inputmode="numeric" name="dose_body">
                    </div>

                </div>

                <div class="form-row form-group">

                    <div class="col-sm-4 label-column">
                        <label class="col-form-label">線量(頸部)&nbsp;</label>
                    </div>

                    <div class="col-sm-6 col-lg-4 input-column">
                        <input class="form-control" type="text" placeholder="mSv" inputmode="numeric" name="dose_neck">
                    </div>

                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="formCheck-1" name="Re-record">
                    <label class="form-check-label" for="formCheck-1" style="font-weight: normal;padding-top: 1px;">続けて線量の記録を行う</label>
                </div>

                <button class="btn btn-light submit-button" type="submit">登録</button>

            </form>

        </div>

    </div>

</div>
@endsection
