<?php
namespace noah;

class Application
{
	// protected $action = '';
	// protected $default_action = 'welcome';

	function __construct()
	{
		# code...
	}

	public function run()
	{
		try {
			// if(PHP_SAPI === 'cli') {
			// 	die("Error: Not Run CLI" . PHP_EOL);
			// }

			// $this->_parse_request_uri();
			$classname = 'app\controllers\Welcome';
			$action = 'index';

			if (class_exists($classname)) {
				$class = new $classname();
				call_user_func(array(&$class, $action));
			} else {
				throw new Exception("Error Not Found Class: $classname" . PHP_EOL, 1);
			}
		} catch (Exception $e) {
			// todo
			print_r($e->getMessage());
		}
	}

	protected function _parse_request_uri()
	{
		if (!isset($_SERVER['REQUEST_URI'])) {
			return array();
		}

		// /user/login?name=absd&pwd=123456
		$uri = $_SERVER['REQUEST_URI'];
		print_r($uri);
	}
}
