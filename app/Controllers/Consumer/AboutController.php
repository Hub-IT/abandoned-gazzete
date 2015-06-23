<?php namespace Gazzete\Controllers\Consumer;

use Gazzete\Controllers\BaseController;
/**
 * Created by PhpStorm.
 * User: Antony
 * Date: 6/20/2015
 * Time: 21:51
 */

class AboutController extends BaseController {

	public function __construct()
	{
		parent::__construct();
	}

	public function about()
	{
		$this->twig->display('consumer/about.twig');
	}

}