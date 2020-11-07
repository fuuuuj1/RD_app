<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Exposure;
use App\http\Resources\Exposure as ExposureResource;
use App\Http\Resources\ExposureResource as ResourcesExposureResource;

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

        // リクエストされた計測年の取得
        $year = $request->year;

        // user_idと合致する線量データだけ取得する 集計データは計測した月で昇順に並べる
        return \App\Exposure::select('dose_body', 'month')
            ->where('user_id', $id)
            ->where('year', $year)
            ->orderBy('month', 'asc')
            ->get();

        // $exposures = \App\Exposure::select('dose_body', 'month')
        // ->where('user_id', $id)
        // ->where('year', $year)
        // ->orderBy('month', 'asc')
        // ->get();

        // return view('Chart.index', ['year' => $year, 'exposures' => $exposures]);

    }

    // 集計する年を選択する 後ほどユーザーidの合致するデータのだけに絞ること！
    public function years()
    {

        return \App\Exposure::select('year')
            ->groupBy('year')
            ->pluck('year');

    }

    //  指定された計測年の被ばく線量を取得する
    public function getExposureByYear(Request $request)
    {
        // 取得したい計測年の取得
        $year = $request->year;

        // 指定した年の線量記録の取得
        $exposures = \App\Exposure::select('dose_body', 'month')
        ->where('year', $year)
        ->orderBy('month', 'asc')
        ->get();

        return new ExposureResource($exposures);

    }
}
