<?php

declare(strict_types=1);

namespace App\Example;

use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

final class FourthExample
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

        $this->logger->debug('fourth example debug description');
    }
}

$builder = new ContainerBuilder();

$builder->addDefinitions([
    LoggerInterface::class => new Logger('My_Logger', [
        new StreamHandler('logs/debug.log', Logger::DEBUG),
    ]),
]);

$container = $builder->build();

$exampleController = $container->get('\App\Example\FourthExample');
$exampleController->something();

// OR

$container->call(['\App\Example\FourthExample', 'something'], []);
