<?php namespace App\Controllers;
use app\Models\User;

/**
 * Created by PhpStorm.
 * User: Antony
 * Date: 5/20/2015
 * Time: 15:33
 */

class WelcomeController extends BaseController
{

	private $user;

	function __construct()
	{
		self::__construct();

		$this->user = new User();
	}

	public function antonyFunction()
	{
		// Render a template
		echo $this->templates->render('welcome', ['name' => $this->user->getName()]);
	}

}