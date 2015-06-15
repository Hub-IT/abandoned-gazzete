<?php namespace Gazzete\Controllers\Admin;

use Gazzete\Controllers\BaseController;

/**
 * @author  Rizart Dokollari
 * @version 6/15/2015
 */
class DashboardController extends BaseController {

	public function __construct()
	{
		parent::__construct();
	}

	public function dashboard()
	{
		$title = 'Gazzete | Home';

		$summary = 'summary';

		$this->twig->display('admin/dashboard.twig');
	}
}