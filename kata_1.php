<?php

function cumulBoxes(int $number) {

    $result = "";
    for($i = 0; $i < $number; $i++) {
        $result .= str_repeat('[]', $i +1);

        $result .= "\n";
    }

    return $result;
}

echo cumulBoxes(3);
/**
 * []
 * [][]
 * [][][]
 */

 echo "\n";
 echo "\n";
 echo cumulBoxes(5);