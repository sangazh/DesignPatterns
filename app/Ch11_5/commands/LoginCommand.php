<?php

namespace App\Ch11_5\Commands;

use App\Ch11_5\CommandContext;
use App\Ch11_5\Registry;

class LoginCommand extends Command
{

    /**
     * @param \App\Ch11_5\CommandContext $context
     *
     * @return bool
     */
    public function execute(CommandContext $context)
    {
        $manager = Registry::getAccessManager();
        $user = $context->get('username');
        $pass = $context->get('pass');
        $userObj = $manager->login($user, $pass);

        if (is_null($userObj)) {
            $context->setError($manager->getError());
            return false;
        }

        $context->addParam("user", $userObj);
        return true;
    }
}