<?php

namespace Remeritus\LaravelIssueTracker;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Remeritus\LaravelIssueTracker\Commands\LaravelIssueTrackerCommand;

class LaravelIssueTrackerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-issue-tracker')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-issue-tracker_table')
            ->hasCommand(LaravelIssueTrackerCommand::class);
    }
}
