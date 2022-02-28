<?php
    $string = "hello world";
    $string2 = "";
    for($i=(strlen($string) -1);$i>=0;$i--){
    $string2.=$string[$i];
    }

    echo $string2;