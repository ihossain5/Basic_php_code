<?php
    $students = array('Rahim','karim','monir','12');

//    print_r($students);   /*For print array*/
//    var_dump($students);

    $n= count($students);
//    echo $n;
    for ($i=0;$i<$n;$i++){
        echo $students[$i]."\n";
    }
    for ($i=$n-1;$i>=0;$i--){
        echo $students[$i]."\n";
    }