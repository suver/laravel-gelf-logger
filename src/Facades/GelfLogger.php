<?php

namespace suver\LaravelGelfLogger\Facades;

use Illuminate\Support\Facades\Facade;

class GelfLogger extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'gelf-logger';
    }
}
