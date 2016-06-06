<?php

namespace Divspace\Fizzbuzz;

use Divspace\Fizzbuzz\NumberFizzBuzzItem;
use Divspace\Fizzbuzz\WordFizzBuzzItem;

class FizzBuzzFactory
{
    private $multipliers = [];

    public function __construct(array $multipliers)
    {
        $this->multipliers = $multipliers;
        krsort($this->multipliers);
    }

    public static function check($number, $multiplier)
    {
        return !($number % $multiplier);
    }

    public function create($number)
    {
        foreach ($this->multipliers as $multiplier => $word) {
            if (self::check($number, $multiplier)) {
                return new WordFizzBuzzItem($word);
            }
        }

        return new NumberFizzBuzzItem($number);
    }
}
