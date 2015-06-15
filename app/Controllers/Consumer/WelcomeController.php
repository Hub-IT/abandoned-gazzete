<?php namespace Gazzete\Controllers\Consumer;
use Gazzete\Controllers\BaseController;

/**
 * @author Antony Kalogeropoulos <anthonykalogeropoulos@gmail.com>
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since 5/20/2015
 */
class WelcomeController extends BaseController {

	public function __construct()
	{
		parent::__construct();
	}

	public function welcome()
	{
		$title = 'Gazzete | Home';

		$summary = 'summary';

		$this->twig->display('consumer/welcome.twig');
	}

}