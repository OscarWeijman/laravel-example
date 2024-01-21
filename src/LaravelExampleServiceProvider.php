<?php

namespace OscarWeijman\LaravelExample;

use Illuminate\Support\Facades\Route;
use OscarWeijman\LaravelExample\Commands\LaravelExampleCommand;
use OscarWeijman\LaravelExample\Http\Controllers\MyController;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasMigration('create_example_table')
            ->hasCommand(LaravelExampleCommand::class);
    }

    public function packageRegistered()
    {
        Route::macro('example', function (string $baseUrl = 'example') {

            Route::prefix($baseUrl)->group(function () {
                Route::get('/', [MyController::class, 'index']);
            });

        });
    }
}
