<?php

namespace Study\Design\App\Notifier\Package;

class FirstAccessPackge extends Package
{
    /**
     * @inheritDoc
     */
    public function getContent(): string
    {
        return "Ola, {$this->recipient->nome}, realize o primeiro acesso com seu CPF.";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): ?string
    {
        return "Acesse nossa plataforma";
    }
    
    /**
     * @inheritDoc
     */
    public function getFooter(): ?string
    {
        return 'Não responda esse email.';
    }
}