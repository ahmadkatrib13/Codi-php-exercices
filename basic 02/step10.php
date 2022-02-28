<?php
    function check_palidrome($string){
        str_replace(' ', '', $string);
        return strrev($string)==$string;
    }
    echo check_palidrome("mdam");