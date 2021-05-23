<?php

namespace App\Services\Sample;

interface SampleServiceInterface
{
    /**
     * サンプル関数
     * 
     * @return string
     */
    public function greet(): string;
}