<?php
require_once __DIR__ . '/../vendor/autoload.php';

$date_str = $_SERVER['argv'][1] ?? 'now';

try {
    echo \DenDude\DateHelper::formatDate($date_str) . PHP_EOL;
} catch (Throwable $e) {
    echo $e->getMessage();
    exit(1);
}

exit(0);