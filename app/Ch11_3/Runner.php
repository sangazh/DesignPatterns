<?php

namespace App\Ch11_3;

use App\Ch11_3\LoginObservers\GeneralLogger;
use App\Ch11_3\LoginObservers\PartnershipTool;
use App\Ch11_3\LoginObservers\SecurityMonitor;

class Runner
{
    public static function init()
    {
        $login = new Login();
        new SecurityMonitor($login);
        new GeneralLogger($login);
        $pt = new PartnershipTool($login);
        $login->detach($pt);

        for ($x = 0; $x < 10; $x++) {
            $login->handelLogin("bob", "mypass", '158.152.55.35');
            print "\n";
        }
    }

    public static function init1()
    {
        $login = new Login();
        $la = new LoginAnalytics();
        $login->attach($la);
    }

}