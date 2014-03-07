<?php

class Multiplication implements Operation
{
    /**
     * Multiplicate the numeric to the current result.
     * We check if the current result is null (because null multiplicate with
     * something is equals to null).
     *
     * @param  int $num     the integer that we want to multiplicate with the current result
     * @param  int $result  the current result
     * @return int
     */
    public function run($num, $current)
    {
        if(is_null($current)){
            return $num;
        }

        return $current * $num;
    }
}