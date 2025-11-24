<?php

namespace Study\Design\Login\Handler;


use Study\Design\Login\Params;

abstract class Handler
{
    private ?Handler $nextHandler = null;
    
    public function handler(Params $params): void
    {
        $this->nextHandler?->handler($params);
    }
    
    public function nextHandle(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        return $this->nextHandler;
    }
}