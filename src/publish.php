<?php

require_once("../vendor/autoload.php");

$line = readline("Message: ");
print $line.PHP_EOL;

$redis = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379
]);

$redis->publish('test', $line);