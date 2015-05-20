<?php

function evenNumbersGenerator($limit = 10)
{
    for($i = 0; $i < $limit; ++$i) {
        yield 2 * $i;
    }
}

foreach(evenNumbersGenerator() as $even) {
    echo $even . ' ';
}

// yield $key => $value
// return stops

echo PHP_EOL;

function getLine($fileName)
{
    if (!file_exists($fileName)) {
        return;
    }

    $fileHandle = fopen($fileName, "r");

    while ($line = fgets($fileHandle)) {
        yield $line;
    }

    fclose($fileHandle);
}

foreach(getLine("../file.txt") as $line) {
    echo $line;
}

echo PHP_EOL;