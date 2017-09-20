<?php

namespace BlackBits\SlackLog;

use Illuminate\Support\Facades\Facade;


class SlackLogFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SlackLog';
    }
}