<?php

namespace App\Ch11_4\Unit\Composite;

use App\Ch10_1_2\UnitException;
use App\Ch11_4\Unit\Cavalry;
use App\Ch11_4\Unit\Unit;

/**
 * Class TroopCarrierUnit
 *
 * @package App\Ch11_4\Unit\Composite
 */
class TroopCarrierUnit extends CompositeUnit
{
    /**
     * @param \App\Ch11_4\Unit\Unit $unit
     *
     * @throws \App\Ch10_1_2\UnitException
     */
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