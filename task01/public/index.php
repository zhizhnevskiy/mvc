<?php

define('PROJECT_DIR', dirname(__DIR__));
define('SRC_DIR', PROJECT_DIR . DIRECTORY_SEPARATOR . 'src');

error_reporting(E_ALL);

require_once implode(DIRECTORY_SEPARATOR, [PROJECT_DIR, 'config', 'autoloader.php']);
$config = require_once PROJECT_DIR . '/config/config.php';

//echo '<pre>';
//var_dump($_SERVER);

echo (new \FlowLearning\Application($config))->handle($_SERVER["REQUEST_URI"]);



