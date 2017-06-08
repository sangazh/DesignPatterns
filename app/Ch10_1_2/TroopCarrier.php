<?php

namespace App\Ch10_1_2;

class TroopCarrier extends CompositeUnit
{
    public function addUnit(Unit $unit)
    {
        if ($unit instanceof Cavalry) {
            throw new UnitException("Can't get a house on the vehicle");
        }
        parent::addUnit($unit);
    }

    /**
     * @return int
     */
    public function bombardStrength()
    {
        return 0;
    }
}