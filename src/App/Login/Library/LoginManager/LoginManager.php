<?php

namespace Study\Design\App\Login\Library\LoginManager;

use Study\Design\App\Login\Exception\Login\LoginException;
use Study\Design\App\Login\Library\LoginManager\LockPolicy\AdminLockPolicy;
use Study\Design\App\Login\Library\LoginManager\LockPolicy\LockPolicy;
use Study\Design\App\Login\Library\LoginManager\LockPolicy\RegularLockPolicy;
use Study\Design\App\Login\Library\LoginManager\Validator\BlockValidator;
use Study\Design\App\Login\Library\LoginManager\Validator\PasswordValidator;
use Study\Design\App\Login\Model\User\User;
use Study\Design\App\Login\Model\User\UserType;
use Study\Design\App\Login\Service\UserService;

class LoginManager
{
    /** @var LockPolicy[] */
    private array $policies;
    
    public function __construct(
        private readonly UserService $userService,
    ) {
        $this->policies = [
            UserType::REGULAR->value => new RegularLockPolicy($this->userService),
            UserType::ADMIN->value => new AdminLockPolicy($this->userService),
        ];
    }
    
    /**
     * @param User $user
     * @param string $password
     * @return bool
     */
    public function attemptLogin(User $user, string $password): bool
    {
        $policy = $this->policies[$user->type->value] ?? new RegularLockPolicy($this->userService);
        
        $blockValidator = new BlockValidator($policy);
        $blockValidator->setNext(new PasswordValidator());
        
        try {
            $blockValidator->handle($user, $password);
            $user->failedAttempts = 0;
            
            echo "User {$user->username} logado com sucesso. <br/>";
            return true;
        }
        catch (LoginException $e) {
            $policy->recordFailure($user);
            
            echo "Login falhou: {$e->getMessage()} <br/>";
            return false;
        }
    }
}