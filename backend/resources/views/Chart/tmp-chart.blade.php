@extends('chart_app')

@section('title', 'グラフテスト')

 @include('new-nav')

@section('content')

  <div id="app3" style="width:600px">
    <p><button @click="displayGraph">グラフ表示</button></p>
    <canvas id="myChart"></canvas>
  </div>


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
    var app = new Vue({
        el: '#app3',
        data: {
            labels : ['2019年1月', '2019年2月', '2019年3月', '2019年4月'],
            data: [120, 190, 34, 58]
        },
        methods:{
            displayGraph: function(){
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: this.labels,
                datasets: [{
                    label: '四半期の売上数の遷移',
                    data: this.data
                }]
                }
            });
            }
        }
    });
</script>

@endsection
