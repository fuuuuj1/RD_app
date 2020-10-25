
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap'
import Vue from 'vue'
import RandomChart from './components/RandomChart'
import ExposureChart from './components/ExposureChart'
import ListComment from './components/ListComment'
import ListMemo from './components/ListMemo'


window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('random-chart-component', require('./components/RandomChart.vue').default);
Vue.component('exposure-chart-component', require('./components/ExposureChart.vue').default);
Vue.component('list-comment-component', require('./components/ListComment.vue').default);
Vue.component('list-memo-component', require('./components/ListMemo.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: {
        RandomChart,
    }
});
const app2 = new Vue({
    el: '#app2',
    components: {
        ExposureChart,
    }
});
const app_comment = new Vue({
    el: '#app_comment',
    components: {
        ListComment,
    },
    data: {
        // データの初期設定 commentは変数 入力された値はこの変数に格納する
        comment: '',
        // 変数を後ほど格納する配列
        comment: []
    }
});
const app_memo = new Vue({
    el: '#app_memo',
    components: {
        ListMemo,
    }
});
