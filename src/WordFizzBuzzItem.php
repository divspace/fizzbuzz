<?php

namespace Divspace\Fizzbuzz;

use Divspace\Fizzbuzz\FizzBuzzItem;

class WordFizzBuzzItem extends FizzBuzzItem
{
    private $word;

    public function __construct($word)
    {
        $this->word = $word;
    }

    public function get()
    {
        return $this->word;
    }
}
