@extends('chart_app')

@section('title', '線量グラフ')

@section('content')
    {{-- <random-chart></random-chart> --}}
    <exposure-chart></exposure-chart>

    <div class="form-group">
                    <label>計測年</label>
                    <select class="form-control" v-model="year" @change="getExposures">
                        <option v-for="year in years" :value="year">@{{ year }} 年</option>
                    </select>
                </div>
@endsection
