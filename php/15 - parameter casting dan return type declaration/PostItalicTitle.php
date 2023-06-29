<?php

class PostItalicTitle extends Post
{
  public function getTitle()
  {
    return sprintf('<i>%s</i>', parent::getTItle());
  }
}
