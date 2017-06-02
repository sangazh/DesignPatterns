<?php

namespace App\Ch8\Notice;

class TextNotifier
{

    /**
     * TextNotifier constructor.
     */
    public function __construct()
    {
    }

    public function inform($message)
    {
        printf("TEXT notification: %s\n", $message);
    }
}