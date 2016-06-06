<?php

namespace Divspace\Fizzbuzz;

use Divspace\Fizzbuzz\FizzBuzzFactory;

class FizzBuzzIterator implements \Iterator
{
    private $start;
    private $finish;
    private $number;
    private $factory;

    public function __construct($start, $finish, $multipliers)
    {
        $this->start = $start;
        $this->finish = $finish;
        $this->factory = new FizzBuzzFactory($multipliers);
    }

    public function current()
    {
        return $this->factory->create($this->number);
    }

    public function rewind()
    {
        $this->number = $this->start;
    }

    public function key()
    {
        return null;
    }

    public function next()
    {
        ++$this->number;
    }

    public function valid()
    {
        return $this->number <= $this->finish;
    }
}
