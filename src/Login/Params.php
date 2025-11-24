<?php

namespace Study\Design\Login;

class Params
{
    private string $url;
    
    private ?string $user;
    
    private ?string $password;
    
    private ?string $token;
    
    public function __construct(string $url, ?string $user = null, ?string $password = null, ?string $token = null)
    {
        $this->setUrl($url);
        $this->setUser($user);
        $this->setPassword($password);
        $this->setToken($token);
    }
    
    public function getUrl(): string
    {
        return $this->url;
    }
    
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }
    
    public function getUser(): ?string
    {
        return $this->user;
    }
    
    public function setUser(?string $user): void
    {
        $this->user = $user;
    }
    
    public function getPassword(): ?string
    {
        return $this->password;
    }
    
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }
    
    public function getToken(): ?string
    {
        return $this->token;
    }
    
    public function setToken(?string $token): void
    {
        $this->token = $token;
    }
}