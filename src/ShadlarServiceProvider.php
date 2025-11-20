<?php

namespace Rmirandasv\Shadlar;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Rmirandasv\Shadlar\Commands\ShadlarCommand;

class ShadlarServiceProvider extends PackageServiceProvider
{
    /**
     * Configure the package.
     */
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('shadlar')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(ShadlarCommand::class);
    }

    /**
     * Bootstrap any package services.
     *
     * Here we define the files that can be published into the host application.
     */
    public function bootingPackage(): void
    {
        // Publish CSS assets to the application's resources directory.
        $this->publishes([
            __DIR__ . '/../resources/css/app.css' => resource_path('css/vendor/shadlar.css'),
        ], 'shadlar-assets');
    }
}
