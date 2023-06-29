<?php

class Errorable
{
  public static function calculate(int $number)
  {
    return ($number % 0);
  }
}

try {
  Errorable::calculate(7);
} catch (Exception $e) {
  echo 'Tidak masuk kesini';
  echo PHP_EOL;
} finally {
  echo 'Apapun yang terjadi, ini harus tetap dieksekusi';
  echo PHP_EOL;
}
