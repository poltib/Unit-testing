<?php

/**
 * We create an interface that is shared by all the differents operations.
 */
interface Operation 
{
	public function run($num, $current);
}