<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Open the home/join/login pages');
$I->amOnPage('/');
//$I->see('c 1 сентября','h1');
$I->seeLink('Join','/user/join');
$I->seeLink('Login','/user/login');

$I->amOnPage('/user/join');
$I->see('JOIN US','h1');

$I->amOnPage('/user/login');
$I->see('LOGIN US','h1');