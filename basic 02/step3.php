<?php
$var1 = 1;
$var2 = 2;
// 1
$temp = $var1;
$var1 = $var2;
$var2 = $temp;
echo "var1 = ", $var1,  " y = ", $var2, "\n";

//2
$var1 = $var1 + $var2;
$var2 = $var1 - $var2;
$var1 = $var1 - $var2;
echo "var1 = ", $var1,  " y = ", $var2, "\n";
