<?php

declare(strict_types=1);

namespace App\Example;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

final class SecondExample
{
    /**
     * @var Logger
     */
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function something(): void
    {
        //...

        $this->logger->debug('second example debug description');
    }
}

$logger = new Logger('My_Logger', [
    new StreamHandler('logs/debug.log', Logger::DEBUG),
]);

$controller = new SecondExample($logger);
$controller->something();
