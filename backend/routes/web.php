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
Auth::routes();
Route::get('/', 'RdController@index')->name('RD.index');
Route::resource('/RD', 'RDController')->names(['create' => 'RD.record'])->except(['index', 'show'])->middleware('auth');

// ユーザーページの表示ルートの設定
Route::get('/userpage', 'RdController@userpage')->name('RD.userpage')->middleware('auth');
// 線量記録をリスト形式で表示する
Route::get('/list', 'RdController@list')->name('RD.list')->middleware('auth');
