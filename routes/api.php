<?php

use App\Http\Controllers\ChartsetController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// 年データを取得
Route::get('chart/years', 'ChartsetController@years');

// 指定された年の線量データの取得
Route::get('chart/{year}', 'ChartsetController@getExposureByYear');
