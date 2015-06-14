<?php namespace Gazzete;
/**
 * Created by PhpStorm.
 * User: Antony
 * Date: 6/15/2015
 * Time: 00:19
 */

class App
{

	public static function getBaseURL()
	{
		return sprintf(
			"%s://%s%s",
			isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
			$_SERVER['SERVER_NAME'],
			$_SERVER['REQUEST_URI']
		);
	}
}