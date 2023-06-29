<?php

class A
{
  public function bar()
  {
    echo 'bar';
  }

  public static function foo()
  {
    echo 'foo';
    static::bar();
  }
}

A::foo();
