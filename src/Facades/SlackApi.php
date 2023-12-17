<?php

namespace SlackApi\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class SlackApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'slackapi';
    }

    public static function setToken($token) {
        static::getFacadeRoot()->setToken($token);
    }
}
