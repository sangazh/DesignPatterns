<?php

namespace App\Ch11_3;

class LoginAnalytics implements Observer
{

    public function update(Observable $observable)
    {
        //not type safe
        $status = $observable->getStatus();
        print __CLASS__ . ":  doing something with status info\n";
    }
}