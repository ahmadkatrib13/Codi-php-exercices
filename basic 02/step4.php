<?php

$var = 153;

function isArmstrong($var)
{
  $sum = 0;
  $number = $var;
  while ($number > 0) {
    $digit1 = $number % 10;
    $number = ($number - $digit1) / 10;
    $sum += $digit1 ** 3;
  };
  return ($sum == $var);
}

if (isArmstrong(153)) {
  echo "is Armstrong\n";
} else {
  echo "not Armstrong\n";
}
