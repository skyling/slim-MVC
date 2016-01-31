<?php
/**
 * 自动加载
 * User: lifuren
 * Date: 16/1/30
 * Time: 23:12
 */
spl_autoload_register(function($class) {
    if(strpos($class, 'App') !== 0 && strpos($class, 'Api') !==0) return;
    $src = dirname(__FILE__);
    $file = $src . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
    if(file_exists($file)){
        require_once $file;
    }
});