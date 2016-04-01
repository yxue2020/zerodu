<?php
// namespace app\controllers

use noah\common

class Welcome
{
	function __construct()
	{
		# code...
	}

	public function index()
	{
		echo "hello noah" . PHP_EOL;
		// echo __class__ . '->' . __function__ . '()' . PHP_EOL;
	}
}

