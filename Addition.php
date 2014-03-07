<?php

class Addition implements Operation
{
     /**
     * Addition the numeric to the current result.
     *
     * @param  int $num     the integer that we want to add to the current result
     * @param  int $result  the current result
     * @return int
     */
     public function run($num, $current)
     {
          return $current + $num;
     }
}