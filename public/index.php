<?php

require(__DIR__ . '/../../vendor/autoload.php');

$application = new noah\Application($config);
$application->run();
