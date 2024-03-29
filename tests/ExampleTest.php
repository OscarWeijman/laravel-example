<?php

use Illuminate\Console\Command;
use OscarWeijman\LaravelExample\Commands\LaravelExampleCommand;

it('can test', function () {
    \Pest\Laravel\artisan(LaravelExampleCommand::class)->assertExitCode(Command::SUCCESS);
});

it('will test original output', function () {
    $text = config('example.command_output');
    \Pest\Laravel\artisan(LaravelExampleCommand::class)
        ->expectsOutput('Output configured in config file');
});

it('can output the configured value', function () {
    config()->set('example.command_output', 'something');

    \Pest\Laravel\artisan(LaravelExampleCommand::class)
        ->expectsOutput('something')
        ->assertExitCode(0);
});
