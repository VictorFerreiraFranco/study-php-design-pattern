<?php

namespace Study\Design\App\Login\Library\LoginManager\Validator;

use Study\Design\App\Login\Exception\Login\LoginException;
use Study\Design\App\Login\Library\LoginManager\LockPolicy\LockPolicy;
use Study\Design\App\Login\Model\User\User;

class BlockValidator extends AbstractValidator
{
    private LockPolicy $policy;
    
    public function __construct(LockPolicy $policy) {
        $this->policy = $policy;
    }
    
    /**
     * @inheritDoc
     */
    public function handle(User $user, string $password): void {
        $this->policy->check($user);
        $this->next($user, $password);
    }
}