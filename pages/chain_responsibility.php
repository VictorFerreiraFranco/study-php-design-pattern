<?php


use Study\Design\Login\Handler\LoginHandler;
use Study\Design\Login\Handler\PasswordHandler;
use Study\Design\Login\Handler\TokenHandler;
use Study\Design\Login\Handler\UrlHandler;
use Study\Design\Login\Handler\UserHandler;
use Study\Design\Login\Params;

renderHeaderPage(
    'Resultado do design pattern Chain of Responsibility',
    'O Chain of Responsibility cria uma corrente de objetos que podem processar uma requisição. Cada objeto da cadeia decide se trata a requisição ou se passa para o próximo. Isso evita grandes blocos de if/else e deixa o fluxo mais flexível. Esse padrão é muito usado em sistemas de aprovação, validações encadeadas ou middlewares de requisição em APIs.',
    'src/Login'
);


$url = new UrlHandler();
$url->nextHandle(new UserHandler())
    ->nextHandle(new PasswordHandler())
    ->nextHandle(new TokenHandler())
    ->nextHandle(new LoginHandler());

echo "Acesso ao login: <br/>";
try {
    $parms = new Params('/login', 'victor', '123');
    $url->handler($parms);
}
catch (Exception $e) {
    echo $e->getMessage()."<br/>";
}

echo "<br/>";
echo "Acesso a home por token: <br/>";

try {
    $parms = new Params('/home', token: 'sdakdsakjd');
    $url->handler($parms);
}
catch (Exception $e) {
    echo $e->getMessage()."<br/>";
}

echo "<br/>";
echo "Acesso a rota não cadastrada: <br/>";

try {
    $parms = new Params('/login-not-found');
    $url->handler($parms);
}
catch (Exception $e) {
    echo $e->getMessage()."<br/>";
}

echo "<br/>";
echo "Acesso ao login sem o usuário informado <br/>";

try {
    $parms = new Params('/login', password: '123');
    $url->handler($parms);
}
catch (Exception $e) {
    echo $e->getMessage()."<br/>";
}

echo "<br/>";
echo "Acesso ao login sem a senha informada <br/>";

try {
    $parms = new Params('/login', 'victor');
    $url->handler($parms);
}
catch (Exception $e) {
    echo $e->getMessage()."<br/>";
}

renderFooterPage();