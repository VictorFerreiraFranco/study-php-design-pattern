<?php

namespace Study\Design\App\Notifier\Notification;

use Study\Design\App\Notifier\Exception\InvalidPackageException;
use Study\Design\App\Notifier\Exception\NotifierException;
use Study\Design\App\Notifier\Package\Package;

abstract class Notification
{
    /**
     * Envia o pacote
     * @param Package $package
     * @return void
     * @throws InvalidPackageException
     * @throws NotifierException
     */
    public function send(
        Package $package
    ): void {
        $this->validatePackge($package);
    }
    
    /**
     * Valida o pacote
     * @param Package $package
     * @return void
     * @throws InvalidPackageException
     * @throws NotifierException
     */
    abstract protected function validatePackge(Package $package): void;
}