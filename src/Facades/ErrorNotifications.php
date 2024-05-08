<?php

namespace AlexManase\ErrorNotifications\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Foundation\Configuration\Exceptions;

/**
 * @method static void report(Exceptions $exceptions)
 * 
 * @see \AlexManase\ErrorNotifications\ErrorNotifications
 */
class ErrorNotifications extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AlexManase\ErrorNotifications\ErrorNotifications::class;
    }
}
