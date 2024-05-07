<?php

namespace AlexManase\ErrorNotifications\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlexManase\ErrorNotifications\ErrorNotifications
 */
class ErrorNotifications extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AlexManase\ErrorNotifications\ErrorNotifications::class;
    }
}
