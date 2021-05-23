<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sample\SampleServiceInterface;

class SampleController extends Controller
{
    private SampleServiceInterface $sampleService;

    /**
     * constructor
     */
    public function __construct (
        SampleServiceInterface $sampleService
    ) {
        $this->sampleService = $sampleService;
    }

    /**
     * トップページ
     */
    public function index()
    {
        $message = $this->sampleService->greet();
        return view(
            'sample.index',[
                'message' => $message
            ]
        );
    }
}
