<?php

namespace Study\Design\App\Notifier;

use Study\Design\App\Notifier\Exception\ChannelNotFoundException;
use Study\Design\App\Notifier\Exception\InvalidPackageException;
use Study\Design\App\Notifier\Exception\NotifierException;
use Study\Design\App\Notifier\Notification\Notification;
use Study\Design\App\Notifier\Package\Package;

class Notifier implements INotifier
{
    /**
     * @var array<Notification>
     */
    private array $channels = [];
    
    /**
     * Adiciona um canal de envio
     * @param Notification $notification
     * @return $this
     */
    public function addChannel(Notification $notification): self
    {
        $this->channels[] = $notification;
        return $this;
    }
    
    /**
     * @inheritDoc
     * @throws InvalidPackageException
     * @throws NotifierException
     */
    public function send(Package $package): void
    {
        if (empty($this->channels))
            throw new ChannelNotFoundException('Nenhum canal de notificação encontrado.');
        
        foreach ($this->channels as $notification)
            $notification->send($package);
    }
}