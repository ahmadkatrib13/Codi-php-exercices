<?php
    function factorial($n){
        $result=1;
        while($n >1) {
            $result*=$n;
            $n--;
        }
        return  $result;
    }
    echo factorial(4);