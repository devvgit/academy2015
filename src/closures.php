<?php

// Anonymous function
function() {
    return "Something special";
};

// Anonymous function assigned to a variable is a lambda
$myBestFunction = function() {
    return "Something special";
};

// Execution
echo $myBestFunction() . PHP_EOL;

// Pass to another function
function testFunction($func)
{
    return $func() . " from test";
}

echo testFunction($myBestFunction) . PHP_EOL;

// or even this way
function handyFunction(Closure $func)
{
    return $func();
}

echo handyFunction(function() { return 123; }) . PHP_EOL;

// Closures can use parameters from another scope
$number = 1;
$leadingZeroes = function($numZeroes) use ($number) {
    return str_pad($number, $numZeroes, '0', STR_PAD_LEFT);
};

echo $leadingZeroes(5) . PHP_EOL;

var_dump($myBestFunction);
var_dump($myBestFunction instanceof Closure);
