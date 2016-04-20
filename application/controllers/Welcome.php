<?php
namespace app\controllers;

use common\City;
use app\models\Item;

use helper\Http;
class Welcome extends Controller
{
	function __construct()
	{
		# code...
	}

	public function index()
	{
		echo __class__ . '->' . __function__ . '()' . PHP_EOL;

		$mod_city = new City();
		$mod_city->index();

		Item::index();

		echo "<hr>";
		print_r($_GET);
		// var_dump();
	}

	public function http()
	{
		$mod_http = new Http();
		$mod_http->index();
	}
}

