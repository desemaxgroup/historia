<?php

namespace Desemax\Historia\Facades;

use Illuminate\Support\Facades\Facade;

class Historia extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'historia';
    }
}
