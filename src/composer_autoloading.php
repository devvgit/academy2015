<?php

require __DIR__ . '/../vendor/autoload.php';

use Binary\Repositories\ProgrammersRepository as Programmers;

$programmes = new Programmers();
$user = new User('Stan', 33);
$students = new \Binary\Repositories\StudentsRepository();

var_dump($programmes->getAll());
var_dump($user);
var_dump($students);
