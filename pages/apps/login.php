<?php

use Study\Design\App\Login\Library\LoginManager\LoginManager;
use Study\Design\App\Login\Model\User\User;
use Study\Design\App\Login\Model\User\UserType;
use Study\Design\App\Login\Service\UserService;

renderHeaderPage(
    'Exemplo pratico de Login',
    null,
    'src/App/Login'
);

$userService = new UserService();

$userAdmin = new User('Victor', password_hash('123', PASSWORD_DEFAULT), UserType::ADMIN);
$userRegular = new User('João', password_hash('123', PASSWORD_DEFAULT), UserType::REGULAR);

$loginManager = new LoginManager($userService);

echo "Exemplo Admin <br/>";
$loginManager->attemptLogin($userAdmin, '111');
$loginManager->attemptLogin($userAdmin, '111');

// Reseta a contagem
$loginManager->attemptLogin($userAdmin, '123');

$loginManager->attemptLogin($userAdmin, '111');
$loginManager->attemptLogin($userAdmin, '111');
$loginManager->attemptLogin($userAdmin, '111');
$loginManager->attemptLogin($userAdmin, '111');
$loginManager->attemptLogin($userAdmin, '111');

// Bloqueado
$loginManager->attemptLogin($userAdmin, '111');


echo "<br/>Exemplo Regular <br/>";
$loginManager->attemptLogin($userRegular, '111');
$loginManager->attemptLogin($userRegular, '111');
$loginManager->attemptLogin($userRegular, '111');

// Bloqueado
$loginManager->attemptLogin($userRegular, '111');
$loginManager->attemptLogin($userRegular, '123');


renderFooterPage();