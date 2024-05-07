<?php

namespace AlexManase\ErrorNotifications\Commands;

use Illuminate\Console\Command;

class ErrorNotificationsCommand extends Command
{
    public $signature = 'error-notifications';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
