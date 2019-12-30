<?php
    function printNumbers($start,$end,$stepping=1){
        if ($start>$end){
            return;
        }
        echo $start."\n";
        $start+= $stepping;
        printNumbers($start,$end,$stepping);
    }
    printNumbers(0,10,3);