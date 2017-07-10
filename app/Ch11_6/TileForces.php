<?php

namespace App\Ch11_6;

class TileForces
{
    private $units = [];
    private $x;
    private $y;

    /**
     * TileForces constructor.
     *
     * @param       int                  $x
     * @param       int                  $y
     * @param \App\Ch11_6\UnitAcquisition $acq
     */
    public function __construct($x, $y, UnitAcquisition $acq)
    {
        $this->x = $x;
        $this->y = $y;
        $this->units = $acq->getUnits($this->x, $this->y);
    }

    /**
     * @return int
     */
    public function firePower()
    {
        $power = 0;

        foreach ($this->units as $unit) {
            $power += $unit->bombardStrength();
        }

        return $power;
    }
}