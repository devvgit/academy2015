<?php

function maximum(...$items)
{
    return max($items);
}

echo maximum(1, 2) . PHP_EOL;
echo maximum(15, 7, 28) . PHP_EOL;
echo maximum(2, 22, 222, 2222) . PHP_EOL;