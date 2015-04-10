<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Welcome to jom');
$I->amOnPage('/administrator/index.php');
$I->fillField("//*[@id='mod-login-username']", "admin");
$I->fillField("//*[@id='mod-login-password']", "admin");
$I->click('//*[@id=\'form-login\']/fieldset/div[3]/div/div/button');
$I->see('Users');
$I->click('//*[@id=\'menu\']/li[5]/a/span');
$I->click('//*[@id=\'menu\']/li[5]/ul/li[1]/a');
$I->wait(3);
$I->see('Dashboard');
$I->click('//*[@id=\'sidebar\']/ul/li[2]/a/span');
$I->click('//*[@id=\'sidebar\']/ul/li[2]/ul/li[1]/a/span');
$I->click('//*[@id=\'sidebar\']/ul/li[2]/ul/li[2]/a/span');
$I->click('.//*[@id=\'sidebar\']/ul/li[2]/ul/li[3]/a/span');

