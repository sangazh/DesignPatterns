<?php

namespace App\Ch10_1;

class Runner
{
    public static function init()
    {
        //create an army
        $mainArmy = new Army();

        //add some units
        $mainArmy->addUnit(new Archer());
        $mainArmy->addUnit(new LaserCannonUnit());

        // create a new army
        $subArmy = new Army();

        // add some units
        $subArmy->addUnit(new Archer());
        $subArmy->addUnit(new Archer());
        $subArmy->addUnit(new Archer());

        //add the secondhand army to the first
        $mainArmy->addUnit($subArmy);

        // calculations
        print "attacking with strength: " . $mainArmy->bombardStrength();
    }

    /**
     * first runner
     */
    public static function init1()
    {
        $unit1 = new Archer();
        $unit2 = new LaserCannonUnit();
        $army = new Army();
        $army->addUnit($unit1);
        $army->addUnit($unit2);
        print $army->bombardStrength();
    }

}