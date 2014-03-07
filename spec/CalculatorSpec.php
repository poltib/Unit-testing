<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Addition;
use Substraction;
use Multiplication;

class CalculatorSpec extends ObjectBehavior
{
    /**
    * In this test files methods are pretty simple to understand because of their name 
    * behaviour-centric syntax of PhpSpec.
    */
    function it_is_initializable()
    {
        $this->shouldHaveType('Calculator');
    }

    function it_is_null_at_start()
    {
        $this->getResult()->shouldBe(null);
    }

    function its_require_numeric_values(Addition $addition)
    {   
        $this->setOperands('five');
        $this->setOperation($addition);
        $this->shouldThrow('InvalidArgumentException')
             ->duringCalculate();
    }

    function it_add_numbers(Addition $addition)
    {
        // Here we mock the Addition class to test in isolation.
        $addition->run(5,null)->willReturn(5);

        $this->setOperands(5);
        $this->setOperation($addition);
        $this->calculate()->shouldBe(5);
    }

    function it_add_multiple_numbers(Addition $addition)
    {
        $addition->run(5,null)->willReturn(5);
        $addition->run(3,5)->willReturn(8);
        $addition->run(2,8)->willReturn(10);

        $this->setOperands(5,3,2);
        $this->setOperation($addition);
        $this->calculate()->shouldBe(10);
    }

    function it_substract_numbers(Substraction $substraction)
    {
        $substraction->run(5,null)->willReturn(-5);

        $this->setOperands(5);
        $this->setOperation($substraction);
        $this->calculate()->shouldBe(-5);
    }

    function it_multiply_numbers(Multiplication $multiplication)
    {
        $multiplication->run(5,null)->willReturn(null);

        $this->setOperands(5);
        $this->setOperation($multiplication);
        $this->calculate()->shouldBe(null);
    }

    function it_add_and_multiply(
        Addition $addition, 
        Multiplication $multiplication
    ) {
        $addition->run(5,null)->willReturn(5);
        $multiplication->run(5,5)->willReturn(25);

        // Addition
        $this->setOperands(5);
        $this->setOperation($addition);
        $this->calculate()->shouldBe(5);

        // Multiplication
        $this->setOperands(5);
        $this->setOperation($multiplication);
        $this->calculate()->shouldBe(25);

    }
}
