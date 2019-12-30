<?php
    include_once "functions.php";
    $x=123;
    if (isEven($x)){    //Argument
        echo "This is Even";
    }
    else{
        echo "This is odd \n";
    }

    /*Factorial*/
$f=4;
    echo "factorial of $f is ". factorial($f);
    echo PHP_EOL;

    /*Factorial*/

/*Unlimited Argument*/
    echo sum(1,1,1,1,1,1);

/*Unlimited Argument*/