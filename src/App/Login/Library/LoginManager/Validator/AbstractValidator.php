<?php

namespace Study\Design\App\Login\Library\LoginManager\Validator;

use Study\Design\App\Login\Exception\Login\LoginException;
use Study\Design\App\Login\Model\User\User;

abstract class AbstractValidator implements Validator
{
    protected ?Validator $next = null;
    
    /**
     * @inheritDoc
     */
    public function setNext(Validator $next): Validator
    {
        $this->next = $next;
        return $next;
    }
    
    /**
     * @param User $user
     * @param string $password
     * @return void
     * @throws LoginException
     */
    protected function next(User $user, string $password): void
    {
        $this->next?->handle($user, $password);
    }
}