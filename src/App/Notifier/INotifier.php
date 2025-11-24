<?php

namespace Study\Design\App\Notifier;

use Study\Design\App\Notifier\Package\Package;

interface INotifier
{
    /**
     * @param Package $package
     * @return void
     */
    public function send(Package $package): void;
}