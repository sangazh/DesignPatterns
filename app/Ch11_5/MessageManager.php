<?php

namespace App\Ch11_5;

class MessageManager extends CommandContext
{
    public function send($email, $msg, $topic)
    {
        return true;
    }
}