<?php

namespace Study\Design\Notification\Core;

class NotificationMessage
{
    private string $message;
    
    private ?string $title = null;
    
    public function __construct(string $message)
    {
        $this->message = $message;
    }
    
    public function getMessage(): string
    {
        return $this->message;
    }
    
    public function getTitle(): ?string
    {
        return $this->title;
    }
    
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
    
}