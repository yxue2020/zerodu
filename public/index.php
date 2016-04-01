<?php
defined('APP_DEBUG') or define('APP_DEBUG', true);
defined('APP_ENV') or define('APP_ENV', 'devel');

require(__DIR__ . '/../vendor/autoload.php');

$application = new noah\Application();
$application->run();
