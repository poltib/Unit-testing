<?php

/**
 * We create an interface that is shared by all the differents operations.
 */
interface Operation 
{
	/**
	* Run the calcul
	* 
	* @param  int $num
	* @param  int $current
	* @return int
	*/
	public function run($num, $current);
}