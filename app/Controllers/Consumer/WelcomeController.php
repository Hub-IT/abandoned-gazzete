<?php namespace Gazzete\Controllers\Consumer;

use Faker\Factory;
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
		$faker = Factory::create();


		foreach (range(3, 13) as $index)
		{
			$articles[] = ['link'     => $faker->url,
			             'title'    => $faker->name,
			             'summary'  => $faker->paragraph(),
			             'duration' => $faker->numberBetween(1, 30) . ' min',
			             'author'   => [
				             'link'   => $faker->url,
				             'name'   => $faker->name,
				             'avatar' => $faker->imageUrl(),],
			             'category' => [
				             'link' => $faker->url,
				             'name' => $faker->name]];
		}


		$this->twig->display('consumer/welcome.twig', compact('articles'));
	}

}