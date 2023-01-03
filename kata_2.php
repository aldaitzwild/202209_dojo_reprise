<?php

function completeSerie(array $numbers): string
{
    $result = [];
    for($i = 1; $i < 10; $i++) {
        if(!in_array($i, $numbers)) {
            $result[] = $i;
        }
    }

    return '['.implode(',', $result).']';
}

echo(completeSerie([1,5,4]));
echo "\n";
 echo "\n";
echo(completeSerie([2,3,8,9]));
echo "\n";
 echo "\n";
echo(completeSerie([1,3,4,6,8,9]));