<?php

use Study\Design\RemoteControl\Command\Fan\Fan;
use Study\Design\RemoteControl\Command\Light\Light;
use Study\Design\RemoteControl\RemoteControl;

renderHeaderPage(
    'Resultado do design pattern Command',
    'O Command encapsula uma ação como um objeto, separando quem pede para executar de quem realmente executa. A ideia é transformar cada requisição (como "salvar arquivo", "copiar texto", "enviar e-mail") em um objeto de comando independente.',
    'src/RemoteControl'
);

$light = new Light();
$fan = new Fan();

$remote = new RemoteControl($light, $fan);

echo "Caso 1 <br/>";

$remote->turnOnLight();
$remote->turnOnFan();
$remote->undo();
$remote->undo();

echo "<br/>";
echo "Caso 2 <br/>";
$remote->turnOnFan();
$remote->turnOffFan();
$remote->undo();
$remote->undo();

echo "<br/>";
echo "Caso 2 <br/>";
$remote->turnOnFan();
$remote->turnOnLight();
$remote->undo();
$remote->turnOffFan();

renderFooterPage();