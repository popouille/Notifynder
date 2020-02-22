<?php

namespace Popouille\Notifynder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Notifynder.
 */
class Notifynder extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'notifynder';
    }
}
