<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('confirm that all articles are shown in the Home Page under the Articles tab.');
// I visit the home page
$I->amOnPage('/');

// I verify the URL
$I->seeCurrentUrlEquals('/');

//I see that the Articles button is highlighted
$I->seeElement(['css' => 'a'], ['class' => 'select-posts active']);


//For each article
    //I see title of the article
    //I see author of the article
    //I see summary of the article
    //I see date of the article
    //I see duration of reading the article

// TODO: Test for scrolling with Ajax