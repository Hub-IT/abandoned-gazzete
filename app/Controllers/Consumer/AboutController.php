<?php

/**
 * @author Rizart Dokolalri <r.dokollari@gmail.com>
 * @since 8/8/2015
 */
namespace Gazzete\Controllers\Consumer;

use Faker\Factory;
use Gazzete\Controllers\BaseController;
use Gazzete\Helpers\Html;

/**
 * Class AboutController
 * @package Gazzete\Controllers\Consumer
 */
class AboutController extends BaseController
{

	/**
	 * @var Html
	 */
	private $html;

	/**
	 *
	 */
	public function __construct()
	{
		parent::__construct();

		$this->html = new Html();
	}

	/**
	 *
	 */
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