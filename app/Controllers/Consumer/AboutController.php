<?php namespace Gazzete\Controllers\Consumer;

use Faker\Factory;
use Gazzete\Controllers\BaseController;
use Gazzete\Helpers\Html;

/**
 * Created by PhpStorm.
 * User: Antony
 * Date: 6/20/2015
 * Time: 21:51
 */
class AboutController extends BaseController {

	private $html;

	public function __construct()
	{
		parent::__construct();

		$this->html = new Html();
	}

	public function about()
	{
		$faker = Factory::create();
		$title = implode(" ", $faker->words());
		$subtitle = implode(" ", $faker->words());
		$paragraphs = $faker->paragraphs();
		$sidebarImgUrl = $this->html->url('img/default-about.jpg');

		$this->twig->display('consumer/about.twig', compact('title', 'subtitle', 'paragraphs', 'sidebarImgUrl'));
	}

}