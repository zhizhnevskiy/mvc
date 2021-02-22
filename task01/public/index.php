<?php

define('PROJECT_DIR', dirname(__DIR__));
define('SRC_DIR', PROJECT_DIR . DIRECTORY_SEPARATOR. 'src');

require_once implode(DIRECTORY_SEPARATOR, [PROJECT_DIR, 'config','autoloader.php']);

echo (new \FlowLearning\Application())->handle($_REQUEST['uri']);