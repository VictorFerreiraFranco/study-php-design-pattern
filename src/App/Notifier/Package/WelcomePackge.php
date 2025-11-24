<?php

namespace Study\Design\App\Notifier\Package;

class WelcomePackge extends Package
{
    /**
     * @inheritDoc
     */
    public function getContent(): string
    {
        return "Bem vindo, {$this->recipient->nome}";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): ?string
    {
        return "Sistema de Notificação";
    }
    
    /**
     * @inheritDoc
     */
    public function getFooter(): ?string
    {
        return null;
    }
}