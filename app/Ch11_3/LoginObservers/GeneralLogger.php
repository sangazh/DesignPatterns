<?php

namespace App\Ch11_3\LoginObservers;

use App\Ch11_3\Login;

class GeneralLogger extends LoginObserver
{

    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        print __CLASS__ . ":  add login data to log\n";
    }
}