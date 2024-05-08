<?php

namespace AlexManase\ErrorNotifications\Commands;

use Exception;
use Illuminate\Console\Command;

class ErrorNotificationsTest extends Command
{
    public $signature = 'error-notifications:test';

    public $description = 'Check if the Error Notification package is working.';

    public function handle(): int
    {
        throw new Exception('Exception thrown for testing purposes.');
    }
}
