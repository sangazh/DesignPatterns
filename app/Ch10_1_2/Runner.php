<?php

namespace App\Ch10_1_2;

class Runner
{
    public static function init()
    {
        //create an army
        $mainArmy = UnitScript::joinExisting((new Archer()), (new LaserCannonUnit()));

        // create a new army
        $subArmy = UnitScript::joinExisting((new Archer()), (new Archer()));
        $subArmy = UnitScript::joinExisting($subArmy, (new Archer()));

        //add the secondhand army to the first
        $mainArmy = UnitScript::joinExisting($mainArmy, $subArmy);

        // calculations
        print "attacking with strength: " . $mainArmy->bombardStrength();
    }

}