<?php

namespace SlackApi\Laravel;

use Illuminate\Support\ServiceProvider;
use SlackApi\SlackApiProvider;
use SlackApi\SlackAuthProvider;

class SlackApiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('slackapi.auth', function ($app) {
            $config = $app['config']['slackapi'];
            return new SlackAuthProvider($config['client_id'], $config['client_secret'], $config['redirect_url']);
        });

        
        $this->app->bind('slackapi', function () {
            return new SlackApiProvider;
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
              __DIR__.'/../config/slack-api.php' => config_path('slack-api.php'),
            ], 'config');
        }
    }

}
