<?php
/**
 * Copyright (c) 2016-present, Huangchao, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

defined('APP_DEBUG') or define('APP_DEBUG', true);
defined('APP_ENV') or define('APP_ENV', 'devel');

if (defined('APP_DEBUG')) {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}

require(__DIR__ . '/../vendor/autoload.php');

$application = new core\Application();
$application->run();
