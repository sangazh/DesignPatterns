<?php

namespace App\Ch11_5\Commands;

use App\Ch11_5\CommandContext;

abstract class Command
{
    /**
     * @param \App\Ch11_5\CommandContext $context
     *
     * @return bool
     */
    abstract public function execute(CommandContext $context);

}