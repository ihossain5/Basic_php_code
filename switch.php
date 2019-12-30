<?php
    $n = -21;
    $r = $n % 2;
    switch (true){
        case ($r==0 && $n>0):
            echo "$n is a Positive Even Number";
            break;
        case ($r==1 && $n>0):
            echo "$n is a Positive Odd Number";
            break;
        case ($r==0 && $n<0):
            echo "$n is a Negative Even Number";
            break;
        case ($r==-1 && $n<0):
            echo "$n is a Negative Odd Number";
            break;
    }