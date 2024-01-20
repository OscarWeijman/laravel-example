<?php
use OscarWeijman\LaravelExample\Commands\LaravelExampleCommand;
use Illuminate\Console\Command;

it('can test', function () {
    \Pest\Laravel\artisan(LaravelExampleCommand::class)->assertExitCode(Command::SUCCESS);
});
