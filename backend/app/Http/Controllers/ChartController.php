<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Exposure;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Chart.test-chart');
    }
}
