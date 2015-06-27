<?php
$I = new AcceptanceTester($scenario);
$faker = \Faker\Factory::create();

foreach (range(1, 10) as $index) {
    $article =
        ['link'     => $faker->url, 'title' => $faker->words(), 'summary' => $faker->words(),
         'duration' => $faker->numberBetween(0, 23) . ':' . $faker->numberBetween(0, 60),
         'author'   => ['link' => $faker->url, 'name' => $faker->name, 'avatar' => $faker->imageUrl()]];

    $articles[] = $article;

//    $I->haveInDatabase('articles', $article);
}

//foreach($articles as $article){
//    $I->seeInDatabase('articles', $article);
//}

$I->wantTo('confirm that all articles are shown in the Home Page under the Articles tab.');

// I visit the home page
$I->amOnPage('/');

// I verify the URL
$I->seeCurrentUrlEquals('/');

//I see that the Articles button is highlighted
$I->seeElement(['css' => 'a'], ['class' => 'select-posts active']);

//For each article

//foreach($articles as $article){
//   $I->see($article['title']);
//}
//I see title of the article
//I see author of the article
//I see summary of the article
//I see date of the article
//I see duration of reading the article

// TODO: Test for scrolling with Ajax