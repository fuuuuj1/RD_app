<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RdController extends Controller
{



    public function index()
    {
        return view('Rd_content.index');
    }
}
