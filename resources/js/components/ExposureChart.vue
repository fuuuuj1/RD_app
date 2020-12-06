<template>
  <div class="small">
    <bar-chart :chart-data="datacollection"></bar-chart>
  </div>
</template>

<script>
    //BarChartを呼び出す
    import BarChart from '../Chart/BarChart'

    export default {
    components: {
      BarChart
    },
    // data: {
    //             exposures: [],
    //             year: '{{ date('Y') }}',
    //             years: [],
    //             chart: null
    //         },
    data () {
      return {
        datacollection: null,
      }
    },
    mounted () {
        this.fillData();
        this.getYears();
        this.getExposures();
    },
    options: {
                title: {
                display: true,
                fontSize: 45,
                text: '売上統計'
                        },
    },
    methods: {
        fillData(){

            // チャートに格納するデータを定義する
            this.datacollection = {
                // 配列で取得したデータを格納
                labels: [groupedExposures_body],
                datasets: [
                    {
                    label: '体部線量',
                    backgroundColor: '#f87979',
                    //   配列 or jsonで取得したデータを格納
                    data: dose_body
                    },

                    {
                    label: '頸部線量',
                    backgroundColor: '#f88888',
                    //   配列で取得したデータを格納
                    data: dose_neck
                    }
                    // 後々に線量限度を示すbarも表示する それプラス年間の積算線量も表示する できるなら年ごとに表示とか？
                        ]
            }
                },
        getYears() {

                    //  計測した年リストを取得
                    fetch('/ajax/chart/years')
                        .then(response => response.json())
                        .then(data => this.years = data);

                },
        getExposures() {

                    // 線量データを取得
                    fetch('/ajax/chart?year='+ this.year)
                        .then(response => response.json())
                        .then(data => {

                            if(this.chart) { // チャートが存在していれば初期化

                                this.chart.destroy();

                            }

                            // lodashでデータを加工 1年間の積算線量の描出
                            const groupedExposures_body = _.groupBy(data, 'dose_body'); // 線量ごとにグループ化
                            const groupedExposures_neck = _.groupBy(data, 'dose_neck'); // 線量ごとにグループ化

                            const sum_dose_body = _.map(groupedExposures_body, totalDosebody => {

                                return _.sumBy(totalDosebody, 'dose_body'); // 体部線量の合計

                            });
                            const sum_dose_neck = _.map(groupedExposures_neck, totalDoseneck => {

                                return _.sumBy(totalDoseneck, 'dose_neck'); // 頸部線量の合計

                            });

                            const dose_bodyMonth = _.keys(groupedExposures_body); // 月々の線量の抜き出し
                            const dose_neckMonth = _.keys(groupedExposures_neck);

                        });

                }
            },

    }

</script>

<style>
  .small {
    max-width: 600px;
    margin:  150px auto;
  }
</style>
