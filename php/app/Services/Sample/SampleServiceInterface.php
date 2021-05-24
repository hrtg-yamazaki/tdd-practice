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

    /**
     * 与えられた年号に対応するジブリ作品の名前を返却する
     * 
     * @param int $year
     * @return string
     */
    public function getFilmNameFromYear(int $year): string;
}