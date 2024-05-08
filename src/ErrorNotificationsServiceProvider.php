<?php

namespace AlexManase\ErrorNotifications;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AlexManase\ErrorNotifications\Commands\ErrorNotificationsTest;

class ErrorNotificationsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('error-notifications')
            ->hasConfigFile('error-notifications')
            // ->hasViews()
            // ->hasMigration('create_error-notifications_table')
            ->hasCommand(ErrorNotificationsTest::class)
        ;
    }
}
