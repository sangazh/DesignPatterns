<?php

namespace App\Ch8;

use App\Ch8\Cost\FixedCostStrategy;
use App\Ch8\Cost\TimedCostStrategy;

class Runner
{
    public static function init()
    {
        $lessons[] = new Seminar(4, new TimedCostStrategy());
        $lessons[] = new Lecture(4, new FixedCostStrategy());

        $mgr = new RegistrationMgr();
        foreach ($lessons as $lesson) {
            printf("lesson charge %s. ", $lesson->cost());
            printf("Charge Type: %s\n", $lesson->chargeType());
            $mgr->register($lesson);
        }

    }

}