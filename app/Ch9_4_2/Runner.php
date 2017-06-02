<?php

namespace App\Ch9_4_2;

use App\Ch9_4_2\Bloggs\BloggsCommsManager;
use App\Ch9_4_2\Mega\MegaCommsManager;

class Runner
{
    public static function init()
    {
        $mgr1 = new BloggsCommsManager();
        print $mgr1->getHeaderText();
        print $mgr1->make(BloggsCommsManager::APPT)->encode();
        print $mgr1->getFooterText();

        $mgr2 = new MegaCommsManager();
        print $mgr2->getHeaderText();
        print $mgr2->make(MegaCommsManager::APPT)->encode();
        print $mgr2->getFooterText();
    }

}