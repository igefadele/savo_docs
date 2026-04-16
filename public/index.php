<?php

// Setup Constants & Autoload
define('ROOT_PATH', dirname(__DIR__));
require ROOT_PATH . '/vendor/autoload.php';

// Savo handles the Constants, Dotenv, and Routing internally
$app = \Savo\Core\Application::bootstrap(dirname(__DIR__));

$app->run();