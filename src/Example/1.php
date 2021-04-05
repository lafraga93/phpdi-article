<?php

declare(strict_types=1);

namespace App\Example;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

final class FirstExample
{
    /**
     * @var Logger
     */
    private $logger;

    public function __construct()
    {
        $this->logger = new Logger('My_Logger', [
            new StreamHandler('logs/debug.log', Logger::DEBUG),
        ]);
    }

    public function something(): void
    {
        //...

        $this->logger->debug('first example debug description');
    }
}

$controller = new FirstExample();
$controller->something();
