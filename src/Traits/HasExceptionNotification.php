<?php

namespace AlexManase\ErrorNotifications\Traits;

use AlexManase\ErrorNotifications\Notifications\SendTelegramNotifications;
use Illuminate\Support\Facades\Notification;
use Throwable;

class HasExceptionNotification
{
    /**
     * A list of the exception types that should not be reported.
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            $enabled = config('error-notifications.enabled');

            if ($enabled) {
                $this->sendNotification($e);
            }
        });
    }

    protected function sendNotification($error)
    {
        Notification::route('telegram', config('services.telegram-bot-api.chat_id'))
            ->notify(new SendTelegramNotifications());
    }
}
