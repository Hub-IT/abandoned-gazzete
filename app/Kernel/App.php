<?php namespace Gazzete\Kernel;
/**
 * @author Antony Kalogeropoulos <anthonykalogeropoulos@gmail.com>
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since 6/15/2015
 */

class App {

	private static $baseUrl;

	public static function getBaseURL()
	{
		if ( ! isset(self::$baseUrl))
		{
			self::setBaseUrl(
				sprintf("%s://%s%s", self::isSslEnabled() ? 'https' : 'http',
					$_SERVER['SERVER_NAME'],
					$_SERVER['REQUEST_URI']));
		}

		return self::$baseUrl;
	}

	public static function url($url)
	{
		return self::getBaseURL() . "/$url";
	}

	public static function isSslEnabled()
	{
		return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
	}

	/**
	 * @param mixed $baseUrl
	 */
	public static function setBaseUrl($baseUrl)
	{
		self::$baseUrl = $baseUrl;
	}
}