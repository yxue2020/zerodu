<?php
namespace noah;

defined('_NAMESPACE_')  OR define('_NAMESPACE_', 'app\controllers');

/**
 * Application
 */
class Application
{
	protected $default_site = 'Welcome';
	protected $default_action = 'index';

	function __construct()
	{
		# code...
	}

	public function run()
	{
		try {
			// @list($classname, $action) = $this->_parse_request_uri();
			print_r($_SERVER); exit;

			if (is_null($classname)) {
				$classname = $this->default_site;
			}

			if (is_null($action)) {
				$action = $this->default_action;
			}

			$classname = _NAMESPACE_ . '\\' . $classname;
			if (method_exists($classname, $action)) {
				$class = new $classname();
				call_user_func(array(&$class, $action));
			} else {
				// 404 Not Found.
				@header("http/1.1 404 not found");
				@header("status: 404 not found");
				echo "<h1>404 not found</h1>" . PHP_EOL;
			}
		} catch (Exception $e) {
			print_r($e->getMessage());
		}
	}

	protected function _parse_request_uri()
	{
		if (!isset($_SERVER['REQUEST_URI'])) {
			return array();
		}



		return array();
	}
}
