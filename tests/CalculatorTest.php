<?php
use \Mockery as m;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
	/**
     * Set up the test by calling the class we want to test
     */
	public function setUp()
	{
		$this->calc = new Calculator;
	}

	public function testResultDefaultToNull()
	{
		$this->assertNull($this->calc->getResult());
	}

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
		$this->calc->add('five');
	}

	public function testAcceptsMultipleArgs()
	{
		$this->calc->add(1,2,3,4);

		$this->assertEquals(10, $this->calc->getResult());
		$this->assertNotEquals('plop', $this->calc->getResult());
	}

	public function testSubstract()
	{
		$this->calc->substract(4);

		$this->assertEquals(-4, $this->calc->getResult());
	}	
}