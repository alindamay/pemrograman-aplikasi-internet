<?php

class StringMethod
{
  public function __toString()
  {
    return 'Saya dicetak nih';
  }
}

echo new StringMethod();
echo PHP_EOL;
