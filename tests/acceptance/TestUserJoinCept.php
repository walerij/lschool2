<?php
use Step\Acceptance\TestUserJoin;
$I = new TestUserJoin($scenario);
$I->wantTo('New users join and login');

$user1 = $I->imagineUser();
$user2 = $I->imagineUser();

$I->loginUser($user1);
$I->see("This email does not registered");

$I->loginUser($user1);
$I->loginUser($user2);

$I->loginUser($user1);

$i->see("This email already exists");


$I->loginUser($user1);
$I->isUserLogged(user1);
$I->noUserLogged(user2);
$I->logoutUser();


$I->loginUser($user2);
$I->isUserLogged(user2);
$I->noUserLogged(user1);
$I->logoutUser();

$user1["password"] = "wor password";
$I->loginUser(user1);
$I->see("wrong password");
