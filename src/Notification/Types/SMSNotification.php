<?php

namespace Study\Design\Notification\Types;

use Study\Design\Notification\Core\Notification;
use Study\Design\Notification\Core\NotificationMessage;

class SMSNotification implements Notification
{
    public function send(NotificationMessage $message): void
    {
        echo "Enviando sms: {$message->getMessage()}\n";
    }
}