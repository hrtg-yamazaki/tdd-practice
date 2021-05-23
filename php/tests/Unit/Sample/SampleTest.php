<?php

namespace Tests\Unit\Sample;

use Tests\TestCase;
use App\Services\Sample\SampleService;

class SampleTest extends TestCase
{
    /**
     * セットアップ
     */
    public function setUp(): void
    {
        parent::setUp();

        // テスト対象サービス
        $this->sampleService = app()->make(SampleService::class);
        $this->app->instance(SampleServiceInterface::class, $this->sampleService);
    }

}
