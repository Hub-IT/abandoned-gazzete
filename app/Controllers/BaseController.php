<?php namespace Gazzete\Controllers;

use Gazzete\Helpers\Html;
use Gazzete\Helpers\Text;
use Twig_Environment;
use Twig_Loader_Filesystem;

/**
 * @author Antony Kalogeropoulos <anthonykalogeropoulos@gmail.com>
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since 5/28/2015
 */
class BaseController {

	protected $loader;

	protected $twig;

	function __construct()
	{
		$this->loader = new Twig_Loader_Filesystem(__DIR__ . '/../Views');

		$this->twig = new Twig_Environment($this->loader);

		$this->twig->addGlobal('html', new Html());

		$this->twig->addGlobal('text', new Text());
	}
}

















