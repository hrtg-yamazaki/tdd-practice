<?php

namespace App\Services\Sample;

use App\Services\Sample\SampleServiceInterface;

class SampleService implements SampleServiceInterface
{

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
        switch($year) {
            case 1986:
                $result = '天空の城ラピュタ';
                break;
            case 1988:
                $result = 'となりのトトロ';
                break;
            case 1989:
                $result = '魔女の宅急便';
                break;
            default:
                $result = '次の作品が完成したら今度こそ引退します';
                break;
        }
        return $result;
    }

}