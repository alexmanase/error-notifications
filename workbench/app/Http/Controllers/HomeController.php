<?php

namespace Workbench\App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController
{
    public function __invoke()
    {
        throw new Exception('error');
    }
}
