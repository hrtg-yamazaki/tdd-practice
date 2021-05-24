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

    /**
     * @test
     */
    public function 関数getFilmNameFromYearは、1を与えると引退宣言を返す()
    {
        $expected = '次の作品が完成したら今度こそ引退します';
        $actual   = $this->sampleService->getFilmNameFromYear(1);

        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     */
    public function 関数getFilmNameFromYearは、2を与えると引退宣言を返す()
    {
        $expected = '次の作品が完成したら今度こそ引退します';
        $actual   = $this->sampleService->getFilmNameFromYear(2);

        $this->assertSame($expected, $actual);
    }
}
