<?php

class FinalClass
{
  final public function finalMethod()
  {
  }
}

class ChildClass extends FinalClass
{
  public function finalMethod()
  {
  }
}
