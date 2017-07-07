<?php

namespace App\Ch11_4\Unit\Composite;

use App\Ch11_4\ArmyVisitor;
use App\Ch11_4\Unit\Unit;

/**
 * Class CompositeUnit
 *
 * @package App\Ch11_4\Unit\Composite
 */
abstract class CompositeUnit extends Unit
{
    /**
     * @var array
     */
    protected $units = [];

    /**
     * @return $this
     */
    public function getComposite()
    {
        return $this;
    }

    /**
     * @param \App\Ch11_4\Unit\Unit $unit
     */
    public function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->units, true)) {
            return;
        }
        $unit->setDepth($this->depth + 1);
        $this->units[] = $unit;
    }

    /**
     * @param \App\Ch11_4\Unit\Unit $unit
     */
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

    /**
     * @param \App\Ch11_4\ArmyVisitor $visitor
     */
    public function accept(ArmyVisitor $visitor)
    {
        parent::accept($visitor);
        foreach ($this->units as $thisUnit) {
            $thisUnit->accept($visitor);
        }
    }

}