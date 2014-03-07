<?php

class MultiplicationTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $this->multiplie = new Multiplication;
    }

    public function testMultipliesNumber()
    {
        $result = $this->multiplie->run(3, 10);

        $this->assertEquals(30, $result);
    }

    public function testReturnNullIfCurrentIsNull()
    {
        $result = $this->multiplie->run(12, 0);

        $this->assertEquals(0, $result);
    }

}