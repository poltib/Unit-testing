<?php
use \Mockery as m;

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

    /**
    * Here we test the future Add method that will add numbers to the result.
    * This test assert that if we call this method with the integer 5 it will return * the result (null at the begining) plus 5.
    */
    public function testAddNumbers()
    {
        $this->calc->add(5);

        $this->assertEquals(5, $this->calc->getResult());
    }

    /**
    * @expectedException InvalidArgumentException
    */
    public function testRequiresNumericValue()
    {
        // We check that the parameters are numeric
        $this->calc->add('five');
    }

    /**
    * In this test we check that the functions accepts multiple arguments.
    * So if we call add with (1,2,3,4) it should return 10.
    */
    public function testAcceptsMultipleArgs()
    {
        $this->calc->add(1,2,3,4);

        $this->assertEquals(10, $this->calc->getResult());
        $this->assertNotEquals('plop', $this->calc->getResult());
    }

    /**
    * Same tests that for the addition but for the substraction.
    */
    public function testSubstract()
    {
        $this->calc->substract(4);

        $this->assertEquals(-4, $this->calc->getResult());
    }   
}