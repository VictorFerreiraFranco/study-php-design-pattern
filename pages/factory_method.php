<?php

use Study\Design\Notification\Core\Messenger;
use Study\Design\Notification\Core\NotificationMessage;
use Study\Design\Notification\NotificationFactory;

renderHeaderPage(
    'Resultado do design pattern Factory Method / Simple Factory',
    'O Factory Method centraliza a lógica de criação de objetos. Em vez de instanciar classes diretamente com new, você delega essa responsabilidade a métodos de fábrica que decidem qual classe concreta criar. Isso permite que o código cliente use interfaces ou classes abstratas sem precisar conhecer os detalhes de cada implementação. É muito útil quando o sistema precisa criar diferentes tipos de objetos dependendo do contexto.',
    'src/Notification'
);

$message = new NotificationMessage("Teste email");
$message->setTitle('Teste');

$notification = NotificationFactory::create(Messenger::EMAIL);
$notification->send($message);

$notificationSms = NotificationFactory::create(Messenger::SMS);
$notificationSms->send($message);

renderFooterPage();