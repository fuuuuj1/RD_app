<?php

namespace App\Http\Controllers;

use App\User;
use App\Exposure;
use Illuminate\Http\Request;
use App\Http\Requests\RdRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Rd.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Rd.record');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Exposure $exposure)
    {
        // 入力された記録フォームの値を全て代入
        $exposure->fill($request->all());
        $exposure->user_id = $request->user()->id;

        // user_id,year,monthの同一データが既にExposuresテーブルに登録されていた場合は重複エラーとする
        $check_id = Auth::id();
        $check_year = $request->year;
        $check_month = $request->month;

        // Exposuresテーブルにこれらの値は既に登録されていないかをcountで確認する
        $check_dose = DB::table('exposures')->where([
            ['user_id', $check_id],
            ['year', $check_year],
            ['month', $check_month],
        ])->count();

        if ($check_dose > 0) {
            // カウントがされ重複ありと見做されたら直前のフォームに戻る
            return back()->with('message', '入力した' . $check_year . '年' . $check_month . '月の線量記録は既に登録されています');
        } else {
            // 重複カウントがなければ、線量データをテーブルへ記録
            $exposure->save();

            // リダイレクト先は後ほど記録のサンクスページに変更する チェックボックスの値があればリダイレクト先は再びrecordに
            return redirect()->route('RD.index');
        }
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * listから線量記録の編集ができるようにする
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
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
    public function update(Request $request, Exposure $exposure)
    {
        $exposure->fill($request->all())->save();

        return redirect()->route('RD.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exposure $exposure)
    {
        $exposure->delete();

        // uriのRD.listが指定されたら listメソッドが動くのでページネーションなどの記述は不要
        return redirect()->route('RD.list');
    }

    /**
     * ユーザーページの表示
     * @return \Illuminate\Http\Response
     */
    public function userpage()
    {
        return view('RD.userpage');
    }

    /**
     * 線量記録をリストとして表示 (グラフから線量記録を編集できたら不要かな？)
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        // ログインしているユーザーの線量記録を表示する ページネーションも実装
        $id = Auth::id();
        $exposures = Exposure::where('user_id', $id)
        ->orderBy('year', 'desc')
        ->orderBy('month', 'desc')
        ->paginate(9);

        return view('RD.list', ['exposures' => $exposures]);
    }
}
