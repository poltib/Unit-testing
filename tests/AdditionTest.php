<?php

class AdditionTest extends PHPUnit_Framework_TestCase
{

	public function setUp()
	{
		$this->add = new Addition;
	}

	public function testAddNumber()
	{
		$result = $this->add->run(3, 0);

		$this->assertEquals(3, $result);
	}

}