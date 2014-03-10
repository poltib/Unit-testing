<?php

class Calculator
{
    /**
     * The start value.
     *
     * @var null
     */
    protected $result = null;

    /**
     * Set the result to the parameter
     *
     *  @param  int
     */
    public function setResult($num)
    {
        $this->result = $num;
    }
    
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
     * Add the param(s) to the result
     * We just foreach throught the function's parameters. Into this loop we check if
     * the parameters are numeric. If it is we add the parameter to the result
     * otherwise we throw an InvalidArgumentException. 
     *
     *  @param  int
     */
    public function add()
    {
        foreach (func_get_args() as $num)
        {
            if (!is_numeric($num)){
                throw new InvalidArgumentException;
            }

            $this->result += $num;
        }
    }

    /**
     * Substract the param(s) to the result
     * Same as the addition but we substract.
     *
     *  @param  int
     */
    public function substract()
    {
        foreach (func_get_args() as $num)
        {
            if (!is_numeric($num)){
                throw new InvalidArgumentException;
            }

            $this->result -= $num;
        }
    }
}