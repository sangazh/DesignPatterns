<?php

namespace App\Ch10_1_2;

abstract  class CompositeUnit extends Unit
{
    protected $units = [];

    public function getComposite()
    {
        return $this;
    }

    public function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->units, true)) {
            return;
        }
        $this->units[] = $unit;
    }

    public function removeUnit(Unit $unit)
    {
        $idx = array_search($unit, $this->units, true);
        if (is_int($idx)) {
            array_slice($this->units, $idx, 1, []);
        }
    }

    /**
     * @return array
     */
    public function getUnits()
    {
        return $this->units;
    }

}