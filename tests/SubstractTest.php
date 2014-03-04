<?php

class SubstractionTest extends PHPUnit_Framework_TestCase
{

	public function setUp()
	{
		$this->sub = new Substraction;
	}

	public function testSubstractNumber()
	{
		$result = $this->sub->run(3, 0);

		$this->assertEquals(-3, $result);
	}

}