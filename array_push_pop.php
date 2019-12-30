<?php
    $students= ['rahim','karim','monir','12'];
    $students[3]= 'jamal';

    /*FOR data insert into ARAY*/
    array_push($students['3'],'pince');
    array_push($students,'kamal');  /*insert data into ending point*/
   array_unshift($students,'salam'); /*insert data into starting point*/

/*FOR data remove  into ARAY*/
    $student = array_shift($students); /*remove data into starting point*/
    $student = array_pop($students);    /*remove data into ending point*/

    var_dump($students);
