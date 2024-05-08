<?php

namespace AlexManase\ErrorNotifications;

use AlexManase\ErrorNotifications\Notifications\SendTelegramNotifications;
use Illuminate\Support\Facades\Notification;
use Throwable;

class ErrorNotifications
{
    public function report($exceptions)
    {
        $exceptions
            ->dontReport([
                // \Illuminate\Auth\AuthenticationException::class,
                // \Illuminate\Auth\Access\AuthorizationException::class,
                // \Symfony\Component\HttpKernel\Exception\HttpException::class,
                // \Illuminate\Database\Eloquent\ModelNotFoundException::class,
                // \Illuminate\Session\TokenMismatchException::class,
                // \Illuminate\Validation\ValidationException::class,
            ])
            ->reportable(function(Throwable $exception) {
                if (config('error-notifications.enabled'))
                {
                    Notification::route('telegram', config('services.telegram-bot-api.chat-id'))
                        ->notify(new SendTelegramNotifications());
                }
            });
    }
}
