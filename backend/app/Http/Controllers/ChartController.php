<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Exposure;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Chart.index');
    }
}
