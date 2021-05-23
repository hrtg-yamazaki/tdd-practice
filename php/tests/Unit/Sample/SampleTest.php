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
    public function getFilmName関数は、対応する公開作品が無い年号の末尾の数字を与えると引退宣言を返す()
    {
        $expected = '次の作品が完成したら今度こそ引退します';
        $actual   = $this->sampleService->getFilmName(1);

        $this->assertSame($expected, $actual);
    }

}
