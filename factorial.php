<?php
//    5! = 5*4*3*2*1

$n =5;
for ($i=$n, $factorial=1; $i>1; $i--){
    $factorial*= $i;
}
printf("Factorial of %d is %d",$n,$factorial);

echo PHP_EOL;
$result=1;
for ($n=1; $n<=10; $n++){
    $result *= $n;
    echo "Factorial of {$n} is {$result} \n";
}