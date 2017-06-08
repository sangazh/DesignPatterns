<?php

namespace App\Ch10_2;

class Runner
{
    public static function init()
    {
        $tile = new Plains();
        print $tile->getWealthFactor();

        print "\n";

        $tile = new DiamondDecorator(new Plains());
        print $tile->getWealthFactor();
    }

}