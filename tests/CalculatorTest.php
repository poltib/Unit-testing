<?php

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->calc = new Calculator;
    }

    public function testResultDefaultToNull()
    {
        $this->assertNull($this->calc->getResult());
    }

    // test for addition

    // test for substraction
}