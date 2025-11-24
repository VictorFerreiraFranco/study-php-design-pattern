<?php

namespace Study\Design\App\Login\Library\LoginManager\Validator;

use Study\Design\App\Login\Exception\Login\InvalidPasswordException;
use Study\Design\App\Login\Model\User\User;

class PasswordValidator extends AbstractValidator
{
    /**
     * @inheritDoc
     */
    public function handle(User $user, string $password): void
    {
        if (!password_verify($password, $user->passwordHash))
            throw new InvalidPasswordException("Senha incorreta para {$user->username}");
        
        $this->next($user, $password);
    }
}