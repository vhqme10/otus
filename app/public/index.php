<?php


use App\Application;

require_once '../vendor/autoload.php';

echo $_SERVER['HOSTNAME'].PHP_EOL;

$a = new Application($_POST['string'] ?? null);

print_r($a->run());

exit;