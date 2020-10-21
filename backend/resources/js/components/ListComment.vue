<template>
  <!-- <div class="card-bottom">
    <button type="button" class="btn m-0 p-1" data-toggle="collapse" data-target="#collapseExample"
    aria-expanded="false" aria-controls="collapseExample">
      <i class="fas fa-chevron-circle-down"></i>
    </button>
    <span class="list-footer-comment">テストコメント</span>

    <div class="collapse" id="collapseExample"> -->

        <!-- Laravelと非同期をしてコメントの入力をリロードなしで受け付けるようにする -->
        <div class="card card-body">
            アコーディオンのテスト
            <a class="btn btn-link collapse-close" href="#">閉じる</a>
        </div>
    <!-- </div>
  </div> -->
</template>

<script>
    $(function(){
        $('.collapse-close').click( function (){
        $(".collapse").collapse('hide');
        });
    });
</script>
