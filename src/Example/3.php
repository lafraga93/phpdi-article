<?php

declare(strict_types=1);

namespace App\Example;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

final class ThirdExample
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function something(): void
    {
        //...

        $this->logger->debug('third example debug description');
    }
}

$logger = new Logger('My_Logger', [
    new StreamHandler('logs/debug.log', Logger::DEBUG),
]);

$controller = new ThirdExample($logger);
$controller->something();
