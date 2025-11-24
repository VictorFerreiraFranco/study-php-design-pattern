<?php

namespace Study\Design\App\Notifier\Notification;

use Study\Design\App\Notifier\Exception\InvalidEmailException;
use Study\Design\App\Notifier\Exception\InvalidPackageException;
use Study\Design\App\Notifier\Package\Package;

class EmailNotification extends Notification
{
    /**
     * @inheritDoc
     */
    public function send(Package $package): void
    {
        parent::send($package);
        
        echo <<<HTML
        Enviado Email, para {$package->getRecipient()->email}. Titulo: {$package->getTitle()} Conteúdo: {$package->getContent()} Rodapé: {$package->getFooter()} <br/>
        HTML;
    }
    
    /**
     * @inheritDoc
     * @throws InvalidEmailException
     */
    protected function validatePackge(Package $package): void
    {
        if (empty($package->getRecipient()->email))
            throw new InvalidPackageException('O destinatário não contem o e-mail cadastrado.');
        
        if ($package->getRecipient()->email == 'invalid@email.com')
            throw new InvalidEmailException("O e-mail do destinatario é invalido. Email: {$package->getRecipient()->email}");
    }
}