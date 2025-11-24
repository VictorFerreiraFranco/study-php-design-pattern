<?php

namespace Study\Design\Login\Handler;

use Study\Design\Login\Params;

class TokenHandler extends Handler
{
    /**
     * @param Params $params
     * @return void
     */
    function handler(Params $params): void
    {
        if (empty($params->getToken())) {
            parent::handler($params);
            return;
        }
        
        echo "Token: Ok <br/>";
        
        parent::handler($params);
    }
}