<?php

namespace App\Ch8\Notice;

class MailNotifier
{

    /**
     * MailNotifier constructor.
     */
    public function __construct()
    {
    }

    public function inform($message)
    {
        printf("MAIL notification: %s\n", $message);
    }
}