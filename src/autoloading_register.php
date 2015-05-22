<?php

function customAutoloader($className)
{
    include dirname(__FILE__) . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
}

function userAutoloader($className)
{
    include $className . '.php';
}

spl_autoload_register('customAutoloader');
spl_autoload_register('userAutoloader');

$programmers = new Binary\Repositories\ProgrammersRepository();
$user = new User('Michael', 24);

var_dump($programmers);
var_dump($user);