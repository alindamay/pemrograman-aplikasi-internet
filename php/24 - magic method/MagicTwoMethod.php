<?php

class MagicTwoMethod
{
  private $data = [
    'name' => 'Muhamad Surya Iksanudin', 'address' => 'In your hearth',
  ];

  public function __unset($property)
  {
    if (isset($this->data[$property])) {
      unset($this->data[$property]);
    }
  }
}

$magic = new MagicTwoMethod();

var_dump($magic);
unset($magic->address);
var_dump($magic);
