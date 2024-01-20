<?php

use Illuminate\Console\Command;
use OscarWeijman\LaravelExample\Commands\LaravelExampleCommand;

it('can test', function () {
    \Pest\Laravel\artisan(LaravelExampleCommand::class)->assertExitCode(Command::SUCCESS);
});
