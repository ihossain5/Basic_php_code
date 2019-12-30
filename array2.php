<?php
  $input = array("red", "green", "blue", "yellow");

  array_splice($input,2,0,array('black'));

// remove the last element of $input

array_splice($input,-1);

// remove the first element of $input

array_splice($input,0,1);

// insert an element at the start of $input

array_splice($input, 2, 1, array('rahim', 'karim'));

var_dump($input);