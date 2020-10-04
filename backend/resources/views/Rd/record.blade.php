@extends('app')

@section('title', '線量の記録')

@section('content')

<div class="record-content">

    <div class="row register-form">
    @include('error_message')

        <div class="col-md-8 offset-md-2">

        <form class="custom-form" action="{{route('RD.store')}}" method="POST">
                @csrf

                <h1>線量の記録</h1>
                <div class="form-row form-group">

                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="pawssword-input-field">測定した年、月</label>
                    </div>

                    <div class="col-sm-4 col-lg-2 input-column">
                        <input class="form-control" type="text" placeholder="年" inputmode="numeric" required
                        name="year">
                    </div>

                    <div class="col-sm-4 col-lg-2 input-column">
                        <input class="form-control" type="text" placeholder="月" inputmode="numeric" required
                        name="month">
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
                        <label class="col-form-label" for="pawssword-input-field">線量(胸部または腹部)</label>
                    </div>

                    <div class="col-sm-6 col-lg-4 input-column">
                        <input class="form-control" type="text" placeholder="mSv" inputmode="numeric" name="dose_body">
                    </div>

                </div>

                <div class="form-row form-group">

                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="repeat-pawssword-input-field">線量(頸部)&nbsp;</label>
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
