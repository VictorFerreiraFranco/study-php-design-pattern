<?php

namespace Study\Design\Login\Handler;

use Study\Design\Login\Params;

class LoginHandler extends Handler
{
    /**
     * @param Params $params
     * @return void
     * @throws \Exception
     */
    function handler(Params $params): void
    {
        echo "Usuário logado! <br/>";
        
        parent::handler($params);
    }
}