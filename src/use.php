<?php

// class import
use Binary\Repositories\ProgrammersRepository;
$programmersRepository = new ProgrammersRepository();

// class import as alias
use OtherVendor\ProgrammersRepository as Programmers;
$programmers = new Programmers();

// pass variables to closure scope
$criteria = 2;
$a = [1, 2, 3];
$filtered = array_filter($a, function($i) use ($criteria) {
    return $i != 2;
});
