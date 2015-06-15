<?php namespace Gazzete\Controllers;
use Gazzete\Models\Users\User;

/**
 * Created by PhpStorm.
 * User: Antony
 * Date: 5/20/2015
 * Time: 15:33
 */

class WelcomeController extends BaseController
{

	private $user;

	public function __construct()
	{
		parent::__construct();

		$this->user = new User();
	}

	public function antonyFunction()
	{
		$title = 'Gazzete | Home';
		$summary = 'summary';

		echo $this->templates->render('main', ['name' => $this->user->getName(), 'title' => $title], compact('title', 'summary'));
	}

	public function adminFunction()
	{
		$title = 'Gazzete | Home';
		$summary = 'summary';

		echo $this->templates->render('welcome', ['name' => $this->user->getName(), 'title' => $title], compact('title', 'summary'));
	}

}