<?php

namespace Study\Design\App\Notifier\Package;

use Study\Design\App\Notifier\Model\Person;

class DefaultPackge extends Package
{
    protected string $content;
    
    protected ?string $title = null;
    
    protected ?string $footer = null;
    
    public function __construct(Person $recipient, string $content)
    {
        $this->content = $content;
        parent::__construct($recipient);
    }
    
    /**
     * @inheritDoc
     */
    public function getContent(): string
    {
        return $this->content;
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    
    /**
     * @inheritDoc
     */
    public function getFooter(): ?string
    {
        return $this->footer;
    }
    
    /**
     * Define um conteudo
     * @param string $content
     * @return void
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
    
    /**
     * Define um titulo
     * @param string|null $title
     * @return void
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
    
    /**
     * Define um rodapé
     * @param string|null $footer
     * @return void
     */
    public function setFooter(?string $footer): void
    {
        $this->footer = $footer;
    }
}