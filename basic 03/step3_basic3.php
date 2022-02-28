<?php
    function timesofWord($text,$word){
        $arr = explode($word,$text);    
        return sizeof($arr) -1;
    }
   echo timesofWord("asdasd asdasds","word"),"\n";