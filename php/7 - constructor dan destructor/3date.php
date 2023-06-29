<?php

$a = new \DateTimeImmutable();
$b = $a->add(new \DateInterval('P1D'));

echo $b->format('Y-m-d'); 
echo PHP_EOL;
echo $a->format('Y-m-d'); 
echo PHP_EOL;

$a->__construct($b->format('Y-m-d'));

echo $a->format('Y-m-d'); 
echo PHP_EOL;