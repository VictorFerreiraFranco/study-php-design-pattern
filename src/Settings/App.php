<?php

namespace Study\Design\Settings;

class App
{
    private static ?App $instance = null;
    
    private Props $props;
    
    private function __construct()
    {
        // Todo: Recupera os dados da env
        $envData = [];
        
        $this->props = new Props(
            Environment::from($envData['environmen'] ?? 'DEVELOPING'),
            $envData['host'] ?? 'localhost'
        );
    }
    
    public static function getInstance(): App
    {
        if (self::$instance === null)
            self::$instance = new App();
        
        return self::$instance;
    }
    
    public function getProps(): Props
    {
        return $this->props;
    }
}