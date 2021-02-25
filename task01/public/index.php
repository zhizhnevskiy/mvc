<?php

error_reporting(E_ALL);

define('PROJECT_DIR', dirname(__DIR__));
define('SRC_DIR', PROJECT_DIR . DIRECTORY_SEPARATOR . 'src');

require_once implode(DIRECTORY_SEPARATOR, [PROJECT_DIR, 'config', 'autoloader.php']);
$config = require_once PROJECT_DIR . '/config/config.php';


$application = new \FlowLearning\Application($config);

$response = $application->handle($_SERVER["REQUEST_URI"]);

echo $response;
