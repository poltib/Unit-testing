<?php

class Substraction implements Operation
{
     /**
     * Substract the numeric to the current result.
     *
     * @param  int $num     the integer that we want to sustract to the current result
     * @param  int $result  the current result
     * @return int
     */
     public function run($num, $current)
     {
          return $current - $num;
     }
}