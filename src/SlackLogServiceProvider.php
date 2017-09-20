<?php

namespace BlackBits\SlackLog;

use Illuminate\Support\ServiceProvider;


class SlackLogServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/slacklog.php' => config_path('slacklog.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton('SlackLog', function() {
            return new SlackLog(config('slacklog.webhook'));
        });
    }

    public function provides()
    {
        return ['SlackLog'];
    }
}