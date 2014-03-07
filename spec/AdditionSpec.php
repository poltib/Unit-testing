<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AdditionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Addition');
    }

    function it_add_number()
    {
        $this->run(5,0)->shouldBe(5);
    }
}
