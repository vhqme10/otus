<?php

use App\Application;

require_once '../vendor/autoload.php';

try {
    $app = new Application();
    $app->run();
}
    catch(Exception $e){
}

exit;