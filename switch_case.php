<?php
    $n = 127;
    $r = $n % 2;
    switch ($r){
        case 0:
            echo "{$n} is an Even Number";
            break;
        default:
            echo "{$n} is a Odd Number \n";
    }

    $color = 'blue';
    switch ($color){
        case 'red':
        case 'green':
            echo ucwords($color)." is my favourite color";
            break;
        case 'blue':
            echo "Blue is not my favourite color";
            break;
        default:
            echo "This color is ok";
    }
