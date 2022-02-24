<?php
$var = 'a4321';

function sumOfDigits($var)
{
  $sum = 0;
  for ($i = 0; $i < strlen($var); $i++) {
    $sum += (int)$var[$i];
  }
  return $sum;
}
echo sumofdigits($var);
