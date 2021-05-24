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
     * @group getFilmNameFromYear
     */
    public function 関数getFilmNameFromYearは、1を与えると引退宣言を返す()
    {
        $expected = '次の作品が完成したら今度こそ引退します';
        $actual   = $this->sampleService->getFilmNameFromYear(1);

        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     * @group getFilmNameFromYear
     */
    public function 関数getFilmNameFromYearは、1986を与えるとラピュタを返す()
    {
        $expected = '天空の城ラピュタ';
        $actual   = $this->sampleService->getFilmNameFromYear(1986);

        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     * @group getFilmNameFromYear
     */
    public function 関数getFilmNameFromYearは、1988を与えるとトトロを返す()
    {
        $expected = 'となりのトトロ';
        $actual   = $this->sampleService->getFilmNameFromYear(1988);

        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     * @group getFilmNameFromYear
     */
    public function 関数getFilmNameFromYearは、1989を与えると魔女の宅急便を返す()
    {
        $expected = '魔女の宅急便';
        $actual   = $this->sampleService->getFilmNameFromYear(1989);

        $this->assertSame($expected, $actual);
    }

}
