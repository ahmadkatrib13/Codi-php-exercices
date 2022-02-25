<?php

$var = "i love Python but i hate PHP";

function changeString($var)
{
  if (strlen($var) > 1000) return $var;
  $var = str_replace("Python", "PHP", $var);
  return $var;
}

echo changeString($var);
