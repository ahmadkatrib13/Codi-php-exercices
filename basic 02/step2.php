<?php

function greaterFn($num)
{
  if ($num > 30) return $num . " is greater than 30\n";
  if ($num > 20) return $num . " is greater than 20\n";
  if ($num > 10) return $num . " is greater than 10\n";
  return $num . " is less than 10\n";
}

echo greaterFn(40); // 40 is greater than 30
echo greaterFn(21); // 21 is greater than 20
echo greaterFn(12); // 12 is greater than 10
echo greaterFn(8);  // 8 is less than 10
