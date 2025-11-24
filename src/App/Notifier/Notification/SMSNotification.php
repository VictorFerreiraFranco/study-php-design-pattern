<?php

namespace Study\Design\App\Notifier\Notification;

use Study\Design\App\Notifier\Exception\InvalidPackageException;
use Study\Design\App\Notifier\Package\Package;

class SMSNotification extends Notification
{
    /**
     * @inheritDoc
     */
    public function send(Package $package): void
    {
        parent::send($package);
        
        echo "Enviado SMS, para {$package->getRecipient()->phone}. Conteúdo: {$package->getContent()} <br/>";
    }
    
    /**
     * @inheritDoc
     */
    protected function validatePackge(Package $package): void
    {
        if (empty($package->getRecipient()->phone))
            throw new InvalidPackageException('O destinatário não contem o telefone cadastrado.');
    }
}