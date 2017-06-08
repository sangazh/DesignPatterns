<?php

namespace App\Ch10_1_2;

class Army extends CompositeUnit
{
    public function bombardStrength()
    {
        $ret = 0;
        foreach ($this->units as $unit) {
            /** @var \App\Ch10_1_2\Unit $unit */
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }

}