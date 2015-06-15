<?php namespace Gazzete\Controllers;
/**
 * @author Antony Kalogeropoulos <anthonykalogeropoulos@gmail.com>
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since 5/28/2015
 */

use League\Plates\Engine;

class BaseController {

	protected $templates;

	function __construct()
	{
		// Create new Plates instance
		$this->templates = new Engine(__DIR__ . '/../Views');
	}
}