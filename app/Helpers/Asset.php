<?php namespace Gazzete\Helpers;
/**
 * @author  Rizart Dokollari
 * @version 6/26/2015
 */

class Asset {

	public function fetch( $path )
	{
		return require $path;
	}
}