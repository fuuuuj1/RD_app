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
    //環境を判別するbool値を設定するプロパティを定義
    protected $is_production;

    //__construct内で環境を判別してプロパティに値をセット
    public function __construct()
    {
        $this->authorizeResource(Exposure::class, 'exposure');
        $this->is_production = env('APP_ENV') === 'production' ? true : false;
    }

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

            // checkboxが選択されていれば再び記録画面へ
            if ($request->has('re_record')) {
                return redirect('/RD/create', 302, [], $this->is_production)->with('success', '入力した' . $check_year . '年' . $check_month . '月の線量記録は正常に登録されました');
            } else {
                return view('Chart.chart');
            }
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

        return redirect('/list', 302, [], $this->is_production);
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
        return redirect('/list', 302, [], $this->is_production);
    }

    /**
     * ユーザーページの表示
     * @return \Illuminate\Http\Response
     */
    public function userpage()
    {
        return view('Rd.userpage');
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
        ->paginate(12);

        return view('Rd.list', ['exposures' => $exposures]);
    }
}
