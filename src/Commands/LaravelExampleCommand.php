<?php

namespace OscarWeijman\LaravelExample\Commands;

use Illuminate\Console\Command;

class LaravelExampleCommand extends Command
{
    public $signature = 'laravel-example';

    public $description = 'My command';

    public function handle(): int
    {
        $text = config('example.command_output');
        $this->comment($text);

        return self::SUCCESS;
    }
}
