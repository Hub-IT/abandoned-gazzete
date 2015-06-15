<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('view the home page contents');

$I->amOnPage('/');

$I->seeCurrentUrlEquals('/');

$I->see('Articles');

$I->see('Cyberwarfare is not Game of Thrones. A Wall Will Not Work.');

$I->see("According to retired U.S. Army General Stanley McChrystal");

$I->see("4:15 min");

$I->see("STANLEY MCCHRYSTAL");

$I->see("Technology");

