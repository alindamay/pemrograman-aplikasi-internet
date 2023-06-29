<?php

class Variadic
{
  public static function add(int ...$numbers)
  {
    return array_sum($numbers);
  }
}

$numbers = [7, 9, 5, 6];

echo Variadic::add(...$numbers);
echo PHP_EOL;
