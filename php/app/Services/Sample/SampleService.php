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
        return '次の作品が完成したら今度こそ引退します';
    }
}