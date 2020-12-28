@extends('chart_app')

@section('title', '線量グラフ')

 @include('nav')

@section('content')

<div id="app_chart">
<spinner v-show="isLoading" style="margin:300px auto"></spinner>
<div class="container p-3">
    <div class="row">
        <div class="col-md-2" style="margin: 0 auto">
            {{-- 年を選択するためのセレクトボックス --}}
            <div class="form-group" v-show='selectBox'>
                    <label>計測年</label>
                        <select class="form-control" v-model="year" @change="getExposures">
                            <option v-for="year in years" :value="year">@{{ year }} 年</option>
                        </select>
            </div>
        </div>
    </div>

    <div class="row chart-wrapper">


        <div class="col-md6　chart-content" style="margin: 30px auto">


            {{-- chartjsでグラフを描画する --}}
            <canvas id="chart" width="600" height="500"></canvas>

        </div>

    </div>


</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-simple-spinner@1.2.8/dist/vue-simple-spinner.min.js"></script>

    <script>

        const Spinner = window.VueSimpleSpinner;
        const app_chart = new Vue({
            el: '#app_chart',
            data: {
                year: '{{ date('Y') }}',
                years: [],
                labels: [],
                chart: null,
                isLoading: true,
                selectBox: false,
            },
            components: {
                Spinner
            },
            methods: {

                getYears() {

                    // 記録年リストを取得
                    fetch('/api/chart/years')
                        .then(response => response.json())
                        .then(data => this.years = data);
                },

                getExposures() {

                    //ローディングの制御
                    target =this
                    // 接続するurlの指定
                    const url = '/api/chart/'

                    // axios.get('/api/chart/' + this.year)
                    axios.get(`${url}${this.year}`)
                        .then(response => {

                        console.log(response.data)

                            if(this.chart) { // チャートが存在していれば初期化

                                this.chart.destroy();
                        }

                            // 線量データを格納する
                            const dose_body = _.map(response.data, 'dose_body');
                            const dose_neck = _.map(response.data, 'dose_neck');
                            const labels = _.map(response.data, 'month');

                            // 末尾に 月 を付与する関数
                            function plusMonth(value) {
                                return value + '月';
                            };

                            const plus_labels = labels.map(plusMonth);

                            // グラフの最後に線量限度のbarを表示するために配列に値の追加をする
                            dose_body.push('50');
                            dose_neck.push('20');
                            plus_labels.push('線量限度');

                            // グラフのカラーを定義
                            const borderColorBule = "rgba(67,132,243,0.8)";
                            const borderColorRed = "rgba(254,97,132,0.8)";
                            const chartColorBule = "rgba(93,181,255,0.5)";
                            const chartColorRed = "rgba(254,97,132,0.5)";

                            // グラフを描画
                            const ctx = document.getElementById('chart').getContext('2d');
                            this.chart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    datasets: [
                                    {
                                        data: dose_body,
                                        label: '体部線量',
                                        borderColor : borderColorBule,
                                        backgroundColor : chartColorBule,
                                    },
                                    {
                                        data: dose_neck,
                                        label: '頸部線量',
                                        borderColor : borderColorRed,
                                        backgroundColor : chartColorRed,
                                    },
                                    ],
                                    labels: plus_labels,
                                },
                                options: {
                                    title: {
                                        display: true,
                                        fontSize: 30,
                                        text: '被ばく線量'
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                min:0,
                                                max:50,
                                                stepSize:5,
                                                // 縦軸の数値にmSvを表示させる
                                                callback: function(value, index, values) {
                                                    return value + 'mSv ';
                                                }
                                            }
                                        }],
                                        xAxes: [{
                                            ticks: {
                                                padding: 10
                                            }
                                        }]
                                    },
                                    tooltips:{
                                        callbacks:{
                                            label(tooltipItem, data){
                                                const datasetIndex = tooltipItem.datasetIndex;
                                                const index = tooltipItem.index;
                                                const exposure = data.datasets[datasetIndex].data[index];
                                                const position = data.datasets[datasetIndex].label;
                                                return position + exposure + 'mSv';
                                            }
                                        },
                                    },
                                },
                            });
                            // チャートのロードが終了したらローディングオフ,セレクトボックスは表示
                            target.isLoading = false
                            target.selectBox = true
                        })
                        .catch(function (error) {

                            console.log(error);
                        });

                },
            },
            mounted() {
                this.getYears();
                this.getExposures();
            }
        });

    </script>

@endsection
