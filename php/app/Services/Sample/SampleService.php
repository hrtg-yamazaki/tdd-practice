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
}