<?php

namespace App\Services\Sample;

use App\Services\Sample\SampleServiceInterface;

class SampleService implements SampleServiceInterface
{
    /**
     * 公開年度と作品名の対照表
     */
    private const FILMS_DATA = [
        1986 => '天空の城ラピュタ',
        1988 => 'となりのトトロ',
        1989 => '魔女の宅急便',
    ];

    /**
     * 
     */
    public function __construct(
        //
    ) {
        // 
    }

    /**
     * @inheritDoc
     */
    public function greet(): string
    {
        return 'Hello, TDD!';
    }

    /**
     * @inheritDoc
     */
    public function getFilmNameFromYear(int $year): string
    {
        $filmsData = self::FILMS_DATA;

        if (array_key_exists($year, $filmsData)) {
            return $filmsData[$year];
        }
        return '次の作品が完成したら今度こそ引退します';
    }

}