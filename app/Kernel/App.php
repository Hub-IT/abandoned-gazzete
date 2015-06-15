<?php namespace Gazzete\Kernel;
/**
 * Created by PhpStorm.
 * User: Antony
 * Date: 6/15/2015
 * Time: 00:19
 */

class App {

	private static $baseUrl;

	public static function getBaseURL()
	{
		if ( ! isset(self::$baseUrl))
		{
			self::$baseUrl = sprintf("%s://%s%s",
				isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
				$_SERVER['SERVER_NAME'],
				$_SERVER['REQUEST_URI']);
		}

		return self::$baseUrl;
	}

	public static function url($url)
	{
		return self::getBaseURL() . $url;
	}
}