<?php

namespace App\Ch9_6;

class Runner
{
    public static function init()
    {
        $commsMgr = AppConfig::getInstance()->getCommsManager();
        print $commsMgr->getApptEncoder()->encode();
    }

}