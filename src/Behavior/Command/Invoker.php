<?php

namespace Patterns\Behavior\Command;


class Invoker
{

    private Command $onStart;

    private Command $onFinish;

    public function setOnStart(Command $command): void
    {
        $this->onStart = $command;
    }

}