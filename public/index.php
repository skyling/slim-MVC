<?php
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $file = __DIR__ . $_SERVER['REQUEST_URI'];
    if (is_file($file)) {
        return false;
    }
}
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
if(strpos($uri, '/bos') === 0) {
    require __DIR__. '/../src/App/index.php';
    return;
}

if(strpos($uri, '/api') === 0) {
    require __DIR__. '/../src/Api/index.php';
    return;
}
