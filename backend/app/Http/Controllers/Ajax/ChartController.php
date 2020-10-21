<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exposure;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // ログインしているユーザーのidを取得する
        $id = Auth::id();

        // user_idと合致する線量データだけ取得する 集計データは計測した月で昇順に並べる
        return \App\Exposure::select('dose_body', 'dose_neck', 'month')
            ->where('user_id', $id)
            ->where('year', $request->year)
            ->orderBy('month', 'asc')
            ->get();

    }

    // 集計する年を選択する
    public function years()
    {

        return \App\Exposure::select('year')
            ->groupBy('year')
            ->pluck('year');

    }
}
