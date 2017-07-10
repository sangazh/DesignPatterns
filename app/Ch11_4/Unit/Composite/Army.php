<?php

namespace App\Ch11_4\Unit\Composite;

/**
 * Class Army
 *
 * @package App\Ch11_4\Unit\Composite
 */
class Army extends CompositeUnit
{
    /**
     * @return int
     */
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