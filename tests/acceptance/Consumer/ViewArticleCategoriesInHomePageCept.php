<?php
$I = new AcceptanceTester($scenario);
$faker = Faker\Factory::create();
$categories = [
	['name' => implode(" ", $faker->words()), 'ext_img' => $faker->imageUrl()],
	['name' => implode(" ", $faker->words()), 'ext_img' => $faker->imageUrl()],
	['name' => implode(" ", $faker->words()), 'ext_img' => $faker->imageUrl()],
];
foreach ($categories as $category)
{
	$I->haveInDatabase('categories', $category);
}


$I->wantTo('view the categories in the home page');

$I->amOnPage('/');

$I->seeCurrentUrlEquals('/');

$I->see('Categories');

$I->dontSeeElement(['css' => 'a'], ['class' => 'select-categories active']);

$I->click('#categories-tab');

foreach ($categories as $category)
{
	$I->see($category['name']);
}

