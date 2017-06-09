<?php

namespace App\Ch11_3\LoginObservers;

use App\Ch11_3\Login;

class PartnershipTool extends LoginObserver
{

    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        //check $ip address
        //set cookie if it matches a list
        print __CLASS__ . ":  set cookie if it matches a list\n";
    }
}