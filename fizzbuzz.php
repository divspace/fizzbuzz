<?php

require __DIR__.'/vendor/autoload.php';

$multipliers = [
    3 => 'Fizz',
    5 => 'Buzz',
    15 => 'FizzBuzz'
];

if (PHP_SAPI !== 'cli') {
    echo '<pre>';
}

foreach (new Divspace\Fizzbuzz\FizzBuzzIterator(1, 100, $multipliers) as $fizzbuzz) {
    echo $fizzbuzz.PHP_EOL;
}

if (PHP_SAPI !== 'cli') {
    echo '</pre>';
}
