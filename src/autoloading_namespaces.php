<?php

function __autoload($className) {
    require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
}

$programmers = new Binary\Repositories\ProgrammersRepository();
var_dump($programmers->getAll());