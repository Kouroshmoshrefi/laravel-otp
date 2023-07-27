<?php

namespace Kouroshmoshrefi\LaravelOtp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kouroshmoshrefi\LaravelOtp\LaravelOtp
 */
class LaravelOtp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kouroshmoshrefi\LaravelOtp\LaravelOtp::class;
    }
}
