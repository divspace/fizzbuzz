<?php

namespace Divspace\Fizzbuzz\Tests;

use Divspace\Fizzbuzz\FizzBuzzFactory;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    protected $fizzbuzz;

    private $multipliers = [
        3 => 'Fizz',
        5 => 'Buzz',
        15 => 'FizzBuzz'
    ];

    public function __construct()
    {
        $this->fizzbuzz = new FizzBuzzFactory($this->multipliers);
    }

    public function testInputOne()
    {
        $this->assertEquals('1', (string) ($this->fizzbuzz->create(1)));
    }

    public function testInputThree()
    {
        $this->assertEquals('Fizz', (string) ($this->fizzbuzz->create(3)));
    }

    public function testInputFive()
    {
        $this->assertEquals('Buzz', (string) ($this->fizzbuzz->create(5)));
    }

    public function testInputFifteen()
    {
        $this->assertEquals('FizzBuzz', (string) ($this->fizzbuzz->create(15)));
    }
}
