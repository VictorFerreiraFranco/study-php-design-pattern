<?php

namespace Study\Design\Settings;

class Props
{
    private Environment $environment;
    
    private string $host;
    
    public function __construct(
        Environment $environment,
        string $host
    )
    {
        $this->environment = $environment;
        $this->host = $host;
    }
    
    public function getEnvironment(): Environment
    {
        return $this->environment;
    }
    
    public function getHost(): string
    {
        return $this->host;
    }
    
    public function isProduction(): bool
    {
        return $this->environment == Environment::PRODUCTION;
    }
    
    public function isDeveloping(): bool
    {
        return $this->environment == Environment::DEVELOPING;
    }
}