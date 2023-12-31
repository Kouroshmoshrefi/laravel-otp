<?php

namespace Kouroshmoshrefi\LaravelOtp\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Kouroshmoshrefi\LaravelOtp\LaravelOtpServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Kouroshmoshrefi\\LaravelOtp\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelOtpServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-otp_table.php.stub';
        $migration->up();
        */
    }
}
