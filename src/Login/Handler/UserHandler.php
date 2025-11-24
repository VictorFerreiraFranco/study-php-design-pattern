<?php

namespace Study\Design\Login\Handler;

use Study\Design\Login\Params;

class UserHandler extends Handler
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
        
        if (empty($params->getUser()))
            throw new \Exception("User é obrigatório");
        
        echo "User: Ok <br/>";
        
        parent::handler($params);
    }
}