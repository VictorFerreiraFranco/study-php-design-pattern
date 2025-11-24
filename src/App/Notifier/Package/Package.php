<?php

namespace Study\Design\App\Notifier\Package;

use Study\Design\App\Notifier\Model\Person;

abstract class Package
{
    public function __construct(
        protected Person $recipient
    ) { }
    
    /**
     * Retorna o conteudo da notificação
     * @return string
     */
    abstract public function getContent(): string;
    
    /**
     * Retorna o titulo da notificação
     * @return string|null
     */
    abstract public function getTitle(): ?string;
    
    /**
     * Retorna o rodapé da notificação
     * @return string|null
     */
    abstract public function getFooter(): ?string;
    
    /**
     * Retorna o destinatário
     * @return Person
     */
    public function getRecipient(): Person
    {
        return $this->recipient;
    }
}