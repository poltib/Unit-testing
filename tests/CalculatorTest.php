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
}