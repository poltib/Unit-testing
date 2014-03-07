<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SubstractionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Substraction');
    }

    function it_substract_number()
    {
        $this->run(5,0)->shouldBe(-5);
    }
}
