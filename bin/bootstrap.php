<?php

declare(strict_types=1);

require 'vendor/autoload.php';

$logDirectory = 'src/Example/';

if (empty($argv[1])) {
    echo 'The <example> parameter is required!';

    return false;
}

if (!file_exists($logDirectory.$argv[1].'.php')) {
    echo 'The '.$argv[1].' example does not exist!';

    return false;
}

include $logDirectory.$argv[1].'.php';
