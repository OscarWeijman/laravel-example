<?php

namespace OscarWeijman\LaravelExample;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use OscarWeijman\LaravelExample\Commands\LaravelExampleCommand;

class LaravelExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-example')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-example_table')
            ->hasCommand(LaravelExampleCommand::class);
    }
}