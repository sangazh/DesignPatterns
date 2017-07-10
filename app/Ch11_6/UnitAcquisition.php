<?php

namespace App\Ch11_6;

use App\Ch11_4\Unit\Archer;
use App\Ch11_4\Unit\Cavalry;
use App\Ch11_4\Unit\Composite\Army;
use App\Ch11_4\Unit\LaserCannonUnit;

class UnitAcquisition
{
    /**
     * @param int $x
     * @param int $y
     *
     * @return array
     */
    public function getUnits($x, $y)
    {
        // 1. looks up x an d y in local data and get s a list of units id
        // 2. goes off to a data source an d get s full unit data

        // here's some fake data
        $army = new Army();
        $army->addUnit(new Archer());
        $found = [
            new Cavalry(),
            new NullUnit(),
            new LaserCannonUnit(),
            $army
        ];
        return $found;
    }

}