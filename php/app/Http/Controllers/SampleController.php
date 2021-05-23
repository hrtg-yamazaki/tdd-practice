<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    /**
     * トップページ
     */
    public function index()
    {
        return view('sample.index');
    }
}
