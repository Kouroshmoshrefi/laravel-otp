<?php

namespace Kouroshmoshrefi\LaravelOtp;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Kouroshmoshrefi\LaravelOtp\Commands\LaravelOtpCommand;

class LaravelOtpServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-otp')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-otp_table')
            ->hasCommand(LaravelOtpCommand::class);
    }
}
