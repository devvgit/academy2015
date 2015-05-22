<?php

function __autoload($className) {
    require $className . '.php';
}

$user = new User('Michael', 24);
var_dump($user);