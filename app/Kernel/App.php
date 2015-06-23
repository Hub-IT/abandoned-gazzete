<?php namespace Gazzete\Kernel;
/**
 * @author Antony Kalogeropoulos <anthonykalogeropoulos@gmail.com>
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since 6/15/2015
 */

class App
{

    private static $baseUrl;

    public static function getBaseURL()
    {
        if ( ! isset(self::$baseUrl)) {

            $protocol = self::isSslEnabled() ? 'https' : 'http';

            self::setBaseUrl("$protocol://" . $_SERVER['SERVER_NAME']);
        }

        return self::$baseUrl;
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