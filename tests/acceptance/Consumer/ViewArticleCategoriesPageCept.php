<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('view the article categories page');

// i am on '/' page
$I->amOnPage('/');
$I->seeCurrentUrlEquals('/');
// i click on the menu side button
$I->click('#side-bar-btn');

// i see option to click on the categories
// i click on the article categories page
// i see i am on '/article/categories' page
// i see category 'news' category
// i see category 'technology' category
