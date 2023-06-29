<?php

class Call
{
  private function foo(string $name)
  {
    echo $name;
  }

  public static function __callStatic($name, $arguments)
  {
    if ('foo' === $name) {
      self::foo($arguments[0]);
    } else {
      throw new Error(sprintf('Undefined method %s on class %s', $name, __CLASS__));
    }
  }
}


Call::foo('19158578');
echo PHP_EOL;
