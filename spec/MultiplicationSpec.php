<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MultiplicationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Multiplication');
    }

    function it_multiplies_numbers()
    {
    	$this->run(5,2)->shouldBe(10);
    }

    function it_return_null_if_current_is_null()
    {
    	$this->run(5,0)->shouldBe(0);
    }
}
