<?php

namespace App\Ch9_3;

class Runner
{
    public static function init()
    {
        $mgr1 = new BloggsCommsManager();
        print $mgr1->getHeaderText();
        print $mgr1->getApptEncoder()->encode();
        print $mgr1->getFooterText();

        $mgr2 = new MegaCommsManager();
        print $mgr2->getHeaderText();
        print $mgr2->getApptEncoder()->encode();
        print $mgr2->getFooterText();
    }

}