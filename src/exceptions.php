<?php

function raiseException()
{
    throw new Exception("Exception raised");
}

try {
    raiseException();
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
} finally { // Available only for PHP 5.5+
    echo "Some final staff here" . PHP_EOL;
}

class CustomException extends Exception {}