<?php namespace Gazzete\Controllers;

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

		echo $this->templates->render('main', ['title' => $title], compact('title', 'summary'));
	}

}