<?php
namespace noah;

use noah\autoloader;

class Application
{
	
	function __construct()
	{
		# code...
	}

	public function run()
	{
		try {

			self::paser();

			echo __class__ . '->' . __function__ . '()' . PHP_EOL;
			// $action = 'index';
			// $params = array(
			// 	'name' => 'huangchao',
			// 	'age' => 10,
			// 	);

			// $noah = new \noah\controllers\Welcome();
			// var_dump($noah);
			// call_user_func(array(&$noah, $action), $params);

			// call_user_func(array($class, $action), $params);
		} catch (Exception $e) {
			print_r($e->getMessage());
			// todo
		}
	}

	private function paser()
	{
		var_dump($_SERVER);
	}
}
