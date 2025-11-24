<?php

namespace Study\Design\RemoteControl\Command;

interface Command
{
    public function execute(): bool;
    public function undo(): bool;
}