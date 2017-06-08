<?php

namespace App\Ch10_1;

class Army extends Unit
{
    private $units  = [];
    private $armies = [];

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

    public function bombardStrength()
    {
        $ret = 0;
        foreach ($this->units as $unit) {
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }

    public function addArmy(Army $army)
    {
        array_push($this->armies, $army);
    }

}