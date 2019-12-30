<?php
    $n = 7;
    if ($n % 2 == 0){
        if ($n>0){
            echo "$n is a Positive Even Number";
        }
        else{
            echo "$n is Negative Even Number";
        }
    }
    if (abs($n) %2 ==1){
        if ($n>0){
            echo "$n is a Positive Odd number";
        }
        else{
            echo "$n is Negative Odd Number";
        }
    }
