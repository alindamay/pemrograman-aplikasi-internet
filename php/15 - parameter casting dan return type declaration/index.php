<?php

require __DIR__ . '/PostInterface.php';
require __DIR__ . '/Post.php';
require __DIR__ . '/PostItalicTitle.php';
require __DIR__ . '/Mutator/PostMutator.php';
require __DIR__ . '/Mutator/StringMutator.php';

use Mutator\PostMutator;

$post = new PostItalicTitle('Belajar OOP', 'Saya sedang bela jar OOP PHP');
$mutator = new PostMutator($post);

echo $mutator->getBoldTitle();
