<?php namespace Gazzete\Controllers\Consumer;

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
		$paragraphs = $faker->paragraphs(5);
		$sidebarImgUrl = $this->html->url('img/default-about.jpg');

		$this->twig->display('consumer/about.twig', compact('title', 'subtitle', 'paragraphs', 'sidebarImgUrl'));
	}
}