<?php

use Study\Design\App\Notifier\Exception\ChannelNotFoundException;
use Study\Design\App\Notifier\Exception\InvalidEmailException;
use Study\Design\App\Notifier\Exception\InvalidPackageException;
use Study\Design\App\Notifier\Exception\NotifierException;
use Study\Design\App\Notifier\Model\Person;
use Study\Design\App\Notifier\Notification\EmailNotification;
use Study\Design\App\Notifier\Notification\SMSNotification;
use Study\Design\App\Notifier\Notifier;
use Study\Design\App\Notifier\Package\FirstAccessPackge;
use Study\Design\App\Notifier\Package\WelcomePackge;

renderHeaderPage(
    'Exemplo pratico de Notifier',
    null,
    'src/App/Notifier'
);

try {
    $person = new Person('Victor', 'victor@gmail.com', '19999293292');
    
    $notifier = new Notifier();
    $notifier->send(new WelcomePackge($person));
    
} catch (ChannelNotFoundException $e) {
    echo "Erro esperado: {$e->getMessage()} <br/>";
} catch (NotifierException $e) {
    echo "{$e->getMessage()} <br/>";
}


try {
    $person = new Person('Victor', 'victor@gmail.com');
    
    $notifier = new Notifier();
    $notifier->addChannel(new SMSNotification());
    
    $notifier->send(new WelcomePackge($person));
    
} catch (InvalidPackageException $e) {
    echo "Erro esperado: {$e->getMessage()} <br/>";
} catch (NotifierException $e) {
    echo "{$e->getMessage()} <br/>";
}

try {
    $person = new Person('Victor', 'invalid@email.com');
    
    $notifier = new Notifier();
    $notifier->addChannel(new EmailNotification());
    
    $notifier->send(new WelcomePackge($person));
    
} catch (InvalidEmailException $e) {
    echo "Erro esperado: {$e->getMessage()} <br/>";
} catch (NotifierException $e) {
    echo "{$e->getMessage()} <br/>";
}

echo "<br/>Teste sem erro: <br/><br/>";

try {
    $person = new Person('Victor', 'victor@gmail.com', '19999293292');
    
    $notifier = new Notifier();
    $notifier->addChannel(new EmailNotification())
        ->addChannel(new SMSNotification());
    
    $notifier->send(new WelcomePackge($person));
    $notifier->send(new FirstAccessPackge($person));
    
} catch (NotifierException $e) {
    echo "{$e->getMessage()} <br/>";
}

renderFooterPage();