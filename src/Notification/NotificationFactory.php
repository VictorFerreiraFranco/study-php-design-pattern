<?php

namespace Study\Design\Notification;

use Study\Design\Notification\Core\Messenger;
use Study\Design\Notification\Core\Notification;
use Study\Design\Notification\Types\EmailNotification;
use Study\Design\Notification\Types\SMSNotification;

class NotificationFactory
{
    public static function create(Messenger $messenger): Notification
    {
        return match ($messenger) {
            Messenger::EMAIL => new EmailNotification(),
            Messenger::SMS => new SmsNotification(),
        };
    }
}