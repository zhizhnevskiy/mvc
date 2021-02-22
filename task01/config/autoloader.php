<?php

spl_autoload_register(function (string $className) {
    $path = strtr($className, [
            'FlowLearning' => SRC_DIR,
            '\\' => DIRECTORY_SEPARATOR,
        ]) . '.php';
//    var_dump($path);
//    var_dump($className);
    require $path;
});