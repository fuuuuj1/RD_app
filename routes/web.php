<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\RdController;

Auth::routes();

Route::get('/', 'RdController@index')->name('RD.index');

Route::resource('/RD', 'RdController')
->names(['create' => 'RD.record'])
->except(['index', 'show','destroy'])
->middleware('auth');

// 線量記録をリスト形式で表示する
Route::get('list', 'RdController@list')
->name('RD.list')
->middleware('auth');

// 線量記録をリストページで削除する
Route::delete('list/{exposure}', 'RdController@destroy')
->name('RD.destroy')
->middleware('auth');

// 線量記録をリストページで編集する
Route::patch('list/{exposure}', 'RdController@update')
->name('RD.update')
->middleware('auth');


// 線量記録をチャートで表示する
Route::get('chart', 'ChartController@index')
->name('Chart.index')
->middleware('auth');

// ゲストログイン
Route::get('/login/guest', 'Auth\LoginController@guestLogin');
