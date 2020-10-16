@extends('app')

@section('title', 'マイページ')

@section('content')

 @include('nav')


<div class="article-list">

    <div class="container" style="margin-top: 50px;">

        <div class="row articles">

            <div class="col-sm-6 col-md-4 col-lg-3 item">
                <a href="{{route('RD.record')}}">
                    <img class="img-fluid" src="{{asset('assets/img/shutterstock_1254616459.png')}}">
                </a>

                <div style="margin-top: 30px;">
                    <a class="btn btn-link my-page-btn" role="button" style="background-color: #6caee0;color: #ffffff;" href="{{route('RD.record')}}">線量の記録</a>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 item">
                <a href="#">
                    <img class="img-fluid img-thumbnail" src="{{asset('assets/img/5025.png')}}">
                </a>

                <div style="margin-top: 30px;">
                <a class="btn btn-link my-page-btn" role="button" style="background-color: #6caee0;color:#ffffff;" href="{{route('RD.list')}}">記録の編集</a>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 item">
                <a href="#">
                    <img class="img-thumbnail img-fluid" src="{{asset('assets/img/bar-chart-linear-bar-chart-bar-graph-icon-png-and-vector-530860.png')}}">
                </a>

                <div style="margin-top: 30px;">
                    <a class="btn btn-link my-page-btn" role="button" style="background-color: #6caee0;color: #ffffff;">グラフの表示</a>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 item">
                <a href="#">
                    <img class="img-thumbnail img-fluid" src="{{asset('assets/img/人アイコン.png')}}">
                </a>

                <div style="margin-top: 30px;">
                    <a class="btn btn-link my-page-btn" role="button" style="background-color: #6caee0;color: #ffffff;" href="register-edit.html">登録情報変更</a>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection
