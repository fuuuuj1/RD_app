@extends('app')

@section('title', '線量の記録')

@section('content')

<div class="record-content">

    <div class="row register-form">
    @include('error_message')

        <div class="col-md-8 offset-md-2">

        <form class="custom-form" action="{{route('store')}}" method="POST">
                @csrf

                <h1>線量の記録</h1>
                <div class="form-row form-group">

                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="pawssword-input-field">測定した年、月</label>
                    </div>

                    <div class="col-sm-4 input-column">
                        <input class="form-control" type="text" placeholder="年" inputmode="numeric" required
                        name="year">
                    </div>

                    <div class="col-sm-4 input-column">
                        <input class="form-control" type="text" placeholder="月" inputmode="numeric" required
                        name="month">
                    </div>



                </div>

                <div class="form-row form-group">

                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="dropdown-input-field">着用部位</label>
                    </div>

                    <div class="col-sm-4 input-column">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" name="position_id">&nbsp; &nbsp; &nbsp; &nbsp;</button>

                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation" href="#">First Item</a>
                                <a class="dropdown-item" role="presentation" href="#">Second Item</a>
                                <a class="dropdown-item" role="presentation" href="#">Third Item</a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="form-row form-group">

                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="pawssword-input-field">線量(胸部または腹部)</label>
                    </div>

                    <div class="col-sm-6 col-lg-4 input-column">
                        <input class="form-control" type="text" placeholder="mSv" inputmode="numeric">
                    </div>

                </div>

                <div class="form-row form-group">

                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="repeat-pawssword-input-field">線量(頸部)&nbsp;</label>
                    </div>

                    <div class="col-sm-6 col-lg-4 input-column">
                        <input class="form-control" type="text" placeholder="mSv">
                    </div>

                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="formCheck-1">
                    <label class="form-check-label" for="formCheck-1" style="font-weight: normal;padding-top: 1px;">続けて線量の記録を行う</label>
                </div>

                <button class="btn btn-light submit-button" type="submit">登録</button>

            </form>

        </div>

    </div>

</div>
@endsection
