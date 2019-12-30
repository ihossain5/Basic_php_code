<?php
    $n = 3;
//    $number = (20 == $n) ? "Yes" : "No";
    $number = (20 == $n) ? "Twenty" : ((10 == $n) ? "Ten" : ((12 == $n) ? "Twelve" : ((5 == $n) ? "Five" : "A Number")));
    echo $number;

    echo "\n";

    $result = ($n % 2 == 0) ? "Even Number" : "Odd Number";
    echo $result;

    echo "\n";

    $value = (30 < $n) ? "{$n} is greater than 30" :
             ((20 < $n) ? "{$n} is greater than 20":
             ((10 < $n) ? "{$n} is greater than 10": "{$n} is smaller than 30,20 or 10"));
    echo $value;