<?php declare(strict_types=1);

// TODO implement and register autoloader
spl_autoload_register(function (string $className):void{
    $class_path = str_replace('\\','/', $className);
    include 'src/'.$class_path.'.php';
});
