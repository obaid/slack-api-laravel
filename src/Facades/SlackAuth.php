<?php

namespace SlackApi\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class SlackAuth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'slackapi.auth';
    }
}
