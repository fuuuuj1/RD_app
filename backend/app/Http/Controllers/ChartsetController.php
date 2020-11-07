<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Exposure;

use App\http\Resources\Exposure as ExposureResource;
use App\Http\Resources\ExposureResource as ResourcesExposureResource;

class ChartsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // 集計する年の取得
    public function years()
    {

        return \App\Exposure::select('year')
            ->groupBy('year')
            ->pluck('year');

    }

    //  指定された計測年の記録を取得する
    public function getExposureByYear(Request $request)
    {
        // ユーザーidの取得
        $id = Auth::id();

        // 取得したい計測年の取得
        $year = $request->year;

        // 指定した年の線量記録の取得
        $exposures = \App\Exposure::select('dose_body', 'month')
        ->where('user_id', $id)
        ->where('year', $year)
        ->orderBy('month', 'asc')
        ->get();

        return response()->json($exposures);
        // return new ExposureResource($exposures);

    }
}
