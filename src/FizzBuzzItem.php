<?php

namespace Divspace\Fizzbuzz;

abstract class FizzBuzzItem
{
    abstract public function get();

    public function __toString()
    {
        return $this->get();
    }
}
