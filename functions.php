<?php
    function isEven($n){    //Parameter
        if ($n % 2 ==0){
            return true;
        }
        return false;
    }

    function factorial(int $n){     //For PHP 7+ versions
        if (gettype($n)!="integer"){    /*For below 7 php version*/
            return "Invalid";
        }
        $result=1;
        for ($i=$n; $i>1;$i--){
            $result*=$i;
        }
        return $result;
    }

    /*Unlimited Argument*/

    function sum(int...$numbers):int {
        $result = 0;
        for ($i=0; $i<count($numbers); $i++){
            $result += $numbers[$i];
        }
        return $result;
    }
/*Unlimited Argument*/