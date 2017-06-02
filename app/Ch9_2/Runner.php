<?php

namespace App\Ch9_2;

class Runner
{
    public static function init()
    {
        $pref = Preferences::getInstance();
        $pref->setProperty("name", "matt");
        unset($pref);

        $pref2 = Preferences::getInstance();
        print $pref2->getProperty("name");

    }

}