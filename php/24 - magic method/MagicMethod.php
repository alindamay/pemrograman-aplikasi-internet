<?php

class MagicMethod
{
  private $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function __get($property)
  {
    if ('name' === $property) {
      return $this->name;
    } else {
      throw new ParseError(sprintf('Undefined property
				%s in class %s', $property, __CLASS__));
    }
  }
}

$magic = new MagicMethod('19158578');
echo $magic->name;
echo PHP_EOL;
