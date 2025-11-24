<?php

namespace Study\Design\App\Login\Library\LoginManager\Validator;

use Study\Design\App\Login\Exception\Login\LoginException;
use Study\Design\App\Login\Model\User\User;

interface Validator
{
    /**
     * @param Validator $next
     * @return Validator
     */
    public function setNext(Validator $next): Validator;
    
    /**
     * @param User $user
     * @param string $password
     * @return void
     * @throws LoginException
     */
    public function handle(User $user, string $password): void;
}