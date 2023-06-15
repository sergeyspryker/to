<?php

require __DIR__.'/../vendor/autoload.php';

$phrases = [
    "Buck up",
    "Bee cool",
    "Don't worry, be happy!",
];

$randomizer = new Randomizer\Randomizer();

$phrase = $randomizer->randomString(...$phrases);

echo $phrase . PHP_EOL;

///1
