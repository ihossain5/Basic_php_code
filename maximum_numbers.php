<?php
$num1=25;
$num2=35;
$num3=30;
if($num1>$num2 && $num1>$num3){
    echo $num1;
}
else{
    if($num2>$num1 && $num2>$num3){
        echo $num2;
    }
    else
        echo $num3;
}

echo PHP_EOL;

$one = 120;
$two = 1102;
$three = 140;
if ($one>$two){
    if ($one>$three){
        echo $one;
    }else{
        echo $three;
        }
}elseif ($two>$three){
    echo $two;
}else{
    echo $three;
}