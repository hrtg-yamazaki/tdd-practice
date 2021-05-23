<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;


Route::name('sample.')->group(function() {
    Route::get('/', [SampleController::class, 'index'])->name('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});
