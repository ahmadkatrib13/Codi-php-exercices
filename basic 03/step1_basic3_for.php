<?php
$n =12345;

function sumofdigits($n){
    $n = strval($n);
    $sum =0;
    for($i=0;$i<strlen($n);$i++){
        $sum += $n[$i];
    }
    return $sum;
}

echo sumofdigits(234);