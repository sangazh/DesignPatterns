<?php

namespace App\Ch10_1_2;

class UnitScript
{
    /**
     * @param \App\Ch10_1_2\Unit $newUnit
     * @param \App\Ch10_1_2\Unit $occupyingUnit
     *
     * @return CompositeUnit
     */
    public static function joinExisting(Unit $newUnit, Unit $occupyingUnit)
    {
        /** @var CompositeUnit $comp */
        $comp = $occupyingUnit->getComposite();
        if (!is_null($comp)) {
            $comp->addUnit($newUnit);
        } else {
            $comp = new Army();
            $comp->addUnit($occupyingUnit);
            $comp->addUnit($newUnit);
        }
        return $comp;
    }

}