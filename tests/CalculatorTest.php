<?php
use \Mockery as m;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    /**
    * In this test file we run our tests in total isolation. To perform that we mock
    * every external classes called (because these classes have their own test).
    *
    * eg: Multiplication.php have tests in MultiplicationTest.php and here we mock
    * Multiplication to stay isolated.
    *
    * Like this if we have a failed test we can find exactly where the problem is.
    */


    public function setUp()
    {
        $this->calc = new Calculator;

        // Mock all the outside objects
        $this->additionMock = m::mock('Addition');
        $this->substractionMock = m::mock('Substraction');
        $this->multiplicationMock = m::mock('Multiplication');
    }

    public function testResultDefaultToNull()
    {
        $this->assertNull($this->calc->getResult());
    }

    public function testAddNumbers()
    {
        $this->additionMock
             ->shouldReceive('run')
             ->once()
             ->with(5,0)
             ->andReturn(5);

        $this->calc->setOperands(5);
        $this->calc->setOperation($this->additionMock);
        $result = $this->calc->calculate();

        $this->assertEquals(5, $result);
    }

    /**
    * @expectedException InvalidArgumentException
    */
    public function testRequiresNumericValue()
    {
        $this->additionMock
             ->shouldReceive('run')
             ->once()
             ->with('five',0)
             ->andReturn('InvalidArgumentException');

        $this->calc->setOperands('five');
        $this->calc->setOperation($this->additionMock);
        $result = $this->calc->calculate();
    }

    public function testAcceptsMultipleArgs()
    {
        $this->additionMock
             ->shouldReceive('run')
             ->times(4)
             ->andReturn(10);

        $this->calc->setOperands(1,2,3,4);
        $this->calc->setOperation($this->additionMock);
        $result = $this->calc->calculate();

        $this->assertEquals(10, $result);
        $this->assertNotEquals('plop', $result);
    }

    public function testSubstract()
    {
        $this->substractionMock
             ->shouldReceive('run')
             ->once()
             ->with(4,0)
             ->andReturn(-4);

        $this->calc->setOperands(4);
        $this->calc->setOperation($this->substractionMock);
        $result = $this->calc->calculate();

        $this->assertEquals(-4, $result);
    }

    public function testMultipliesNumbers()
    {
        $this->multiplicationMock
             ->shouldReceive('run')
             ->times(3)
             ->andReturn(24);

        $this->calc->setOperands(3,4,2);
        $this->calc->setOperation($this->multiplicationMock);
        $result = $this->calc->calculate();

        $this->assertEquals(24, $result);
    }
}