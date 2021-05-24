- 【Red】該当する作品が無い年号を与えた場合

```
There was 1 error:

1) Tests\Unit\Sample\SampleTest::関数getFilmNameFromYearは、1を与えると引退宣言を返す
Error: Call to undefined method App\Services\Sample\SampleService::getFilmNameFromYear()

/app/tests/Unit/Sample/SampleTest.php:28
```

- 【Green】該当する作品が無い年号を与えた場合

```
OK (3 tests, 3 assertions)
```

- 【Green】該当する作品が無い年号を与えた場合(三角測量)

```
OK (4 tests, 4 assertions)
```

- 【Red】数字の1986が与えられた時、文字列「天空の城ラピュタ」を返す

```
1) Tests\Unit\Sample\SampleTest::関数getFilmNameFromYearは、1986を与えるとラピュタを返す
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-'天空の城ラピュタ'
+'次の作品が完成したら今度こそ引退します'

/app/tests/Unit/Sample/SampleTest.php:52

FAILURES!
Tests: 5, Assertions: 5, Failures: 1.
```
