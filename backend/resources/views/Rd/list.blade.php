@extends('list_app')

@section('title', '線量記録リスト')

@section('content')

<div class="page-body">

    <!-- 記録リストページ -->
    <section class="section-base mg-69">
    <h1 class="title-section">記録リスト</h1>

    <div class="card-columns">

        @foreach($exposures as $exposure)
        {{-- cardの開始 --}}
        <div class="card mb-4">
            {{-- Headerで登録している年、月の表示 --}}
            <div class="card-header bg-transparent border-danger">
                {{$exposure->year. "年". $exposure->month. "月"}}

                {{-- 編集用のリンクアイコンと削除用のアイコンを表示する laravelでデータの編集、削除--}}

                <span class="list-title-icon">

                        <i class="far fa-edit" data-toggle="modal" data-target="{{"#centralModalEdit". "$exposure->year". "$exposure->month"}}"></i>
                        {{-- 線量記録編集のモーダル --}}
                        <div class="modal fade" id="{{"centralModalEdit". "$exposure->year". "$exposure->month"}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                            <div class="modal-dialog" role="document">

                                <div class="modal-content">

                                <div class="modal-header text-center">

                                    <h4 class="modal-title w-100 font-weight-bold">{{$exposure->year. "年". $exposure->month. "月の線量記録の編集"}}</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>

                                </div>
                                <div class="modal-body mx-3">

                                    <div class="md-form mb-5">

                                    <input type="text" inputmode="numeric" class="form-control validate">
                                    <label data-error="wrong" data-success="right">体部線量(mSv)</label>

                                    </div>

                                    <div class="md-form mb-4">

                                    <input type="text" inputmode="numeric" class="form-control validate">
                                    <label data-error="wrong" data-success="right">頸部線量(mSv)</label>

                                    </div>

                                </div>

                                <div class="modal-footer d-flex justify-content-center">
                                    <button class="btn btn-default">記録の更新</button>
                                </div>

                                </div>
                            </div>
                        </div>

                        <i class="far fa-trash-alt" data-toggle="modal" data-target="{{"#centralModalDanger". "$exposure->year". "$exposure->month"}}"></i>

                        <!-- Central Modal Medium Danger -->
                        <div class="modal fade" id="{{"centralModalDanger". "$exposure->year". "$exposure->month"}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-notify modal-danger" role="document">
                            <!--Content-->
                            <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header justify-content-center">
                                <p class="heading lead">{{$exposure->year. "年". $exposure->month. "月の線量記録を削除"}}</p>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="white-text">&times;</span>
                                </button>
                            </div>

                            <!--Body-->
                            <div class="modal-body justify-content-center">
                                <div class="text-center">
                                <p>線量記録を削除します。よろしいでしょうか？</p>
                                </div>
                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <a type="button" class="btn btn-danger">記録の削除</a>
                                <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">キャンセル</a>
                            </div>
                            </div>
                            <!--/.Content-->
                        </div>
                        </div>
                        <!-- Central Modal Medium Success-->


                </span>
            </div>

            {{-- 体部線量と頸部線量の表示 --}}
            <div class="card-body">
                {{-- dose_bodyがnullの時は・・・？ バリデーションでnullではなく0と記入してもらうようにする null->0と認識するようにするとか？--}}
                <h5 class="card-title">
                    {{"体部線量・・・". $exposure->dose_body. "mSv"}}
                </h5>

                {{-- neck doseが空の値でないなら表示 空であるなら空白を表示する --}}
                @if (isset($exposure->dose_neck))
                    <h5 class="card-title">
                        {{"頸部線量・・・". $exposure->dose_neck. "mSv"}}
                    </h5>
                @else
                    <h5 class="card-title"><br></h5>
                @endif

            </div>

            {{-- card bottomの部分 --}}
            <div class="card-bottom">

                {{-- コメントを表示する コメントなければ別メッセージを表示 spanの中身だけvueに差し替えたらいいのでは？
                    コンポーネント間でのデータ受け渡しが困難であればbladeでのメモ表示にする --}}

                @if (isset($exposure->comment))
                <span class="list-footer-comment" data-toggle="modal" data-target="{{"#centralModalComment". "$exposure->year". "$exposure->month"}}">{{$exposure->comment}}<i class="fa fa-angle-down"></i></span>
                @else
                <span class="list-footer-comment" data-toggle="modal" data-target="{{"#centralModalComment". "$exposure->year". "$exposure->month"}}">memo<i class="fa fa-angle-down"></i></span>
                @endif

                    {{-- vueで実装できそうなら利用 今回はちと厳しそう --}}
                    {{-- <span class="list-footer-comment" data-toggle="collapse" data-target="{{"#collapse". "$exposure->year". "$exposure->month"}}" aria-expanded="false" aria-controls="{{"collapse". "$exposure->year". "$exposure->month"}}">
                        <list-memo></list-memo>
                        <i class="fa fa-angle-down" aria-hidden="true"></i></span> --}}

            </div>


            {{-- アコーディオン部分 --}}

                {{-- <div class="collapse" id="{{"collapse". "$exposure->year". "$exposure->month"}}">
                    <list-comment></list-comment>
                </div> --}}

            {{-- コメント入力画面はモーダルで実装 --}}

            <!-- Modal -->
            <div class="modal fade" id="{{"centralModalComment". "$exposure->year". "$exposure->month"}}" tabindex="-1" role="dialog" aria-labelledby="ModalComment"
            aria-hidden="true">

            <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
            <div class="modal-dialog modal-dialog-centered" role="document">


                <div class="modal-content">

                    <div class="modal-header">
                        @if (isset($exposure->comment))
                        <h5 class="modal-title" id="ModalComment">{{$exposure->comment}}</h5>
                        @else
                        <h5 class="modal-title" id="ModalComment">memo</h5>
                        @endif
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="md-form mb-5">
                        <input type="text" name="comment" class="form-control validate">
                        <label>memo</label>
                        </div>
                    </div>

                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-default">メモの登録</button>
                    </div>

                </div>

            </div>

            </div>



        </div>
        @endforeach

    </div>

        <div class="paginate">
            {{ $exposures->links() }}
        </div>


    </section>

</div>
@endsection
