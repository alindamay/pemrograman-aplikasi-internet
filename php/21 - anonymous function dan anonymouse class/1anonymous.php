<?php

$word = 'Ini adalah _closure_';

$print = function () use ($word) {
  echo $word;
};

$print();
echo PHP_EOL;
