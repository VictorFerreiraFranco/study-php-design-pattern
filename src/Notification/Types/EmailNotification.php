<?php

namespace Study\Design\Notification\Types;

use Study\Design\Notification\Core\Notification;
use Study\Design\Notification\Core\NotificationMessage;

class EmailNotification implements Notification
{
    public function send(NotificationMessage $message): void
    {
        if (empty($message->getTitle())) {
            echo "O titlo é obrigatório para envio de email";
            return;
        }
        
        echo "Enviando e-mail: {$message->getTitle()}\n {$message->getMessage()}\n";
    }
}