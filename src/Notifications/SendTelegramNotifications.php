<?php

namespace AlexManase\ErrorNotifications\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class SendTelegramNotifications extends Notification
{
    public function via($notifiable)
    {
        return ["telegram"];
    }

    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            // Optional recipient user id.
            // ->to($notifiable->telegram_user_id)
            // Markdown supported.
            ->content("Hello there!")
        ;
    }
}
