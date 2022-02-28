<?php
    $var = 2;
    function isPowerTwo($var){
        if((($var>0) && ($var & ($var - 1)) == 0))   return "$n is power of 2";
        return "$n is not power of 2"; 
    }
    echo (isPowerTwo(8));