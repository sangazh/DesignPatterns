<?php

namespace App\Ch11_5\Commands;

use App\Ch11_5\CommandContext;
use App\Ch11_5\Registry;

class FeedbackCommand extends Command
{

    /**
     * @param \App\Ch11_5\CommandContext $context
     *
     * @return bool
     */
    public function execute(CommandContext $context)
    {
        $msgSystem = Registry::getMessageSystem();
        $email = $context->get('email');
        $msg = $context->get('msg');
        $topic = $context->get('topic');
        $result = $msgSystem->send($email,$msg, $topic);

        if (!$result) {
            $context->setError($msgSystem->getError());
            return false;
        }

        return true;
    }
}