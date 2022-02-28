<?php
    for($i=0;$i<7;$i++){
        for($j=0;$j<7;$j++){
            if($i==$j ||$i==0||$i==6) echo "*";
            else echo " ";
        }
        echo "\n";
    }