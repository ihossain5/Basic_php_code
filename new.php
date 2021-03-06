<?php
/* Task */
//Given the meal price (base cost of a meal), tip percent (the percentage of the meal price being added as tip),
// and tax percent (the percentage of the meal price being added as tax) for a meal, find and print the meal's total cost.
//
//Note: Be sure to use precise values for your calculations, or you may end up with an incorrectly rounded result!


// Complete the solve function below.
function solve($meal_cost, $tip_percent, $tax_percent){


    $tip = ($meal_cost * $tip_percent) / 100 ;
    $tax = ($meal_cost * $tax_percent) / 100 ;
    $total = $meal_cost + $tip + $tax ;

    echo round($total);
}
 solve(12,20,8);

