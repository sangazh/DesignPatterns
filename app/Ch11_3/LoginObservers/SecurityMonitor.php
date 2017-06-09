<?php

namespace App\Ch11_3\LoginObservers;

use App\Ch11_3\Login;

class SecurityMonitor extends LoginObserver
{
    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        if ($status[0] == Login::LOGIN_WRONG_PASS) {
            //send mail to sysadmin
            print  __CLASS__ . ": sending mail to sysadmin\n";
        }
    }
}