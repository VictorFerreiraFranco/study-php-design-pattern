<?php

namespace Study\Design\Notification\Core;

interface Notification
{
    public function send(NotificationMessage $message);
}