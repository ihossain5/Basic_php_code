<?php
    $filename= "C:\\xampp\\htdocs\\php new\\file\\f1.txt";
   $data= fopen($filename, "a");
//    while (   $line= fgets($data)){
//        echo $line;
//    }
   fwrite($data,"Ismail");
   fwrite($data,"Hossain");