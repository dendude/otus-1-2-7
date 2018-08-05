<?php
require_once __DIR__ . '/../vendor/autoload.php';

$a = $_SERVER['argv'][1] ?? 0;
$b = $_SERVER['argv'][2] ?? 0;

try {
    $sum = new \TatyanaGoncharova\Sum();
    echo $sum->sum($a, $b);
} catch (Throwable $e) {
    echo $e->getMessage();
    exit(1);
}

exit(0);