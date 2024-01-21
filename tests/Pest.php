<?php

use OscarWeijman\LaravelExample\Tests\TestCase;

uses(TestCase::class)
    ->beforeEach(function () {
        \Illuminate\Support\Facades\Route::example();
    })
    ->in(__DIR__);
