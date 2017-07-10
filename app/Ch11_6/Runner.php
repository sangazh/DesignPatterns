<?php

namespace App\Ch11_6;

class Runner
{
    public static function init()
    {
        $acquirer = new UnitAcquisition();
        $tileForces = new TileForces(4, 2, $acquirer);
        $power = $tileForces->firePower();
        print "power is {$power}\n";

    }

}