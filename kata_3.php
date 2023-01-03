<?php

function calculate(string $expression): int
{
    $result = 0;
    eval('$result = ' . $expression . ' ;');
    return $result;
}

echo calculate('2 + 2');
echo "\n";
 echo "\n";
echo calculate('3 * 5');
echo "\n";
 echo "\n";
echo calculate('(2 + 7) * 3 - 1');
echo "\n";
 echo "\n";
