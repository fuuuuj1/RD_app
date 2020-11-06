@extends('chart_app')

@section('title', '線量グラフ')

 @include('new-nav')

@section('content')

<div id="app_chart">
<div class="container p-3">

    <div class="row">

        <div class="col-md6">

            {{-- chartjsでグラフを描画する --}}
            <canvas id="chart" width="400" height="400"></canvas>


            {{-- 年を選択するためのセレクトボックス --}}
            <div class="form-group">


                    <label>計測年</label>
                        <select class="form-control" v-model="year" @change="getExposures">
                            <option v-for="year in years" vbind:value="year">@{{ year }} 年</option>
                        </select>

            </div>

        </div>

    </div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
{{-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> --}}

    <script>

        const app_chart = new Vue({
            el: '#app_chart',
            data: {
                exposures: [], //線量データを格納する
                year: '{{ date('Y') }}',
                years: [],
                labels: [],
                chart: null
            },
            methods: {
                getYears() {

                    // 👇 記録年リストを取得
                    fetch('/api/chart/years')
                        .then(response => response.json())
                        .then(data => this.years = data);
                },

                getJson(){

                    // 任意の年の線量データを取得するためにクエリパラメータの設定
                    const params = new URLSearchParams();
                    params.set('year', this.year);

                    // fetch('/api/chart/?'+ params)
                    fetch('/api/chart')
                    .then(response => response.json())
                    .then(data => console.log(data));
                },

                getExposures() {

                    // 任意の年の線量データを取得するためにクエリパラメータの設定
                    const params = new URLSearchParams();
                    params.set('year', this.year);


                    // 👇 線量データを取得
                    fetch('/api/chart/years?' + params)
                        .then(response => response.json())
                        .then(data => {

                            console.log(data);

                            if(this.chart) { // チャートが存在していれば初期化

                                this.chart.destroy();

                            }

                            // 線量データを格納する
                            this.exposures = data.dose_body
                            this.labels = data.month

                            // 👇 棒グラフを描画
                            const ctx = document.getElementById('chart').getContext('2d');
                            this.chart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    datasets: [{
                                        data: this.exposures,
                                        label: '被ばく線量',
                                    }],
                                    labels: this.labels,
                                },
                                options: {
                                    title: {
                                        display: true,
                                        fontSize: 45,
                                        text: '体部の被ばく線量'
                                    },
                                }
                            });

                        });

                },
            },
            mounted() {
                this.getYears();
                this.getJson();
                this.getExposures();
            }
        });

    </script>

@endsection
