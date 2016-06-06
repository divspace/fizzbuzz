<?php

namespace Divspace\Fizzbuzz;

use Divspace\Fizzbuzz\FizzBuzzItem;

class NumberFizzBuzzItem extends FizzBuzzItem
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function get()
    {
        return (string) $this->number;
    }
}
