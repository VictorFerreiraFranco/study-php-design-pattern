<?php

namespace Study\Design\Login\Handler;

use Study\Design\Login\Params;

class PasswordHandler extends Handler
{
    /**
     * @param Params $params
     * @return void
     * @throws \Exception
     */
    function handler(Params $params): void
    {
        if (!empty($params->getToken())) {
            parent::handler($params);
            return;
        }
        
        if (empty($params->getPassword()))
            throw new \Exception("Senha é obrigatório");
        
        echo "Password: Ok <br/>";
        
        parent::handler($params);
    }
}