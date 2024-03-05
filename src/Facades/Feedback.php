<?php

namespace Magan\Feedback\Facades;

use Illuminate\Support\Facades\Facade;

class Feedback extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'feedback';
    }
}
