<template>
    <!-- Laravelと非同期をしてコメントの入力をリロードなしで受け付けるようにする -->
    <div class="card card-body card-comment">

        <a class="btn btn-link collapse-close up-icon" href="#">
            <i class="fas fa-chevron-circle-up up-icon"></i>
        </a>

        <div class="comment-area">
            <form>

                <input type="text" v-model="newComment" class="comment-textbox">

                    <label class="comment-label" for="Username">memoの更新</label>

                    <button class="btn m-0 p-1" v-on:click="editComment">登録</button>
            </form>
        </div>

    </div>

</template>

<script>
    // アコーディオンを閉じる
    $(function(){
        $('.collapse-close').click( function (){
        $(".collapse").collapse('hide');
        });
    });

    // テキストボックスのラベルの遷移
    $(document).ready(function(){
        $('.comment-textbox').blur(function() {
                if($(this).val().length === 0){
                $('.comment-label').removeClass("focus");
                }
                else { returns; }
            })
            .focus(function() {
                $('.comment-label').addClass("focus")
            });
    });

// コメント入力を保存
export default {
    name:'ListPage',

    // Laravelからv-bindにより Exposresテーブルからcommentカラムのデータを取得しておく
    props:["comment"],

    data: function () {
        return{
            //postで送信するためのリクエストデータ初期化
            request:{
                newComment:''
            }
        }
    },
    methods: {

        // addComment: function(){
        //     this.comment.push(this.newComment);
        // },

        // 入力したコメントを送信する
        editComment(){
            //リクエストデータに入力値を代入
            this.request.comment = this.newComment;
            //axiosでリクエストデータ送信
            axios.post('/users', this.request).then(res => {
                console.log(res.data);
            });
        }

        // コメントをタイトルとして表示するメソッドの作成
    }
}

</script>
