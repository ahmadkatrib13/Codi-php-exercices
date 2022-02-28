<?php
    function isPrime($n){
        $x=2;
        while($x<$n){
            if($n%$x==0) return 0;
            $x++;
        }
        return 1;
    }

    $a = isPrime(4);
    if($a) echo "this is prime number\n";
    else echo "this is not a prime number\n";