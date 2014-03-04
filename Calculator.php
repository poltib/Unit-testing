<?php


//final calculator
class Calculator
{
	/**
     * The start value.
     *
     * @var null
     */
	protected $result = null;

	/**
     * The array of operands.
     *
     * @var null
     */
	protected $operands = [];

	/**
     * The operation class name.
     *
     * @var null
     */
	protected $operation;

	/**
     * Get the result of the operation
     *
     * @return int
     */
	public function getResult()
	{
		return $this->result;
	}

	/**
     * We set the operands array equals to the arguments given.
     */
	public function setOperands()
	{
		$this->operands = func_get_args();
	}

	/**
     * We inject the Operation class.
     */
	public function setOperation(Operation $operation)
	{
		$this->operation = $operation;
	}

	public function calculate()
	{
		foreach ($this->operands as $num)
		{
			if (!is_numeric($num))
				throw new InvalidArgumentException;

			$this->result = $this->operation->run($num, $this->result);
		}
		return $this->result;
	}
}