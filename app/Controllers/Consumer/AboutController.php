<?php namespace Gazzete\Controllers\Consumer;

use Faker\Factory;
use Gazzete\Controllers\BaseController;

/**
 * Created by PhpStorm.
 * User: Antony
 * Date: 6/20/2015
 * Time: 21:51
 */
class AboutController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function about()
    {
        $faker = Factory::create();

        $title = implode(" ", $faker->words());
        $subtitle = implode(" ", $faker->words());
        $paragraphs = $faker->paragraphs(5);

        $this->twig->display('consumer/about.twig', compact('title', 'subtitle', 'paragraphs'));
    }

}