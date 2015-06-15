<?php namespace Gazzete\Helpers;

use Gazzete\Kernel\App;

/**
 * @author  Rizart Dokollari
 * @version 6/16/2015
 */
class Html {

// TODO: write unit test
	public function link($url, $rel = 'stylesheet', $type = 'text/css')
	{
		echo "<link href='" . App::getBaseURL() . "$url' rel='$rel' type='$type' />";
	}

// TODO: write unit test
	public function script($src)
	{
		echo "<script src='" . App::getBaseURL() . "$src'></script>";
	}

// TODO: write unit test
	public function documentWriteScript($src)
	{
		echo "document.write('<script src='" . App::getBaseURL() . "$src'><\\/script>')";
	}

// TODO: write unit test
	public function url($url)
	{
		echo App::getBaseURL() . $url;
	}
}