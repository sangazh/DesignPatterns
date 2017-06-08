<?php

namespace App\Ch10_1;

abstract class Unit
{
    /**
     * @param \App\Ch10_1\Unit $unit
     *
     * @return mixed
     * @throws \App\Ch10_1\UnitException
     */
    public function addUnit(Unit $unit)
    {
        throw new UnitException(get_class($this) . " is a leaf");
    }

    /**
     * @param \App\Ch10_1\Unit $unit
     *
     * @return mixed
     * @throws \App\Ch10_1\UnitException
     */
    public function removeUnit(Unit $unit)
    {
        throw new UnitException(get_class($this) . " is a leaf");
    }

    /**
     * @return int
     */
    abstract public function bombardStrength();
}