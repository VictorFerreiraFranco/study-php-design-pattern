<?php

namespace Study\Design\Login\Handler;

use Study\Design\Login\Params;

class UrlHandler extends Handler
{
    /**
     * @param Params $params
     * @return void
     * @throws \Exception
     */
    public function handler(Params $params): void
    {
        if (!in_array($params->getUrl(), ['/login', '/home']))
            throw new \Exception("URL não encontrada. URL: {$params->getUrl()}");
        
        echo "URL: Ok <br/>";
        
        parent::handler($params);
    }

}