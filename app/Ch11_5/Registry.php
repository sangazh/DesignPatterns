<?php

namespace App\Ch11_5;

class Registry
{

    public static function getAccessManager()
    {
        return new AccessManager();
    }

    public static function getMessageSystem()
    {
        return new MessageManager();
    }
}