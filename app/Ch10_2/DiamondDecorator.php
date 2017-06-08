<?php

namespace App\Ch10_2;

class DiamondDecorator extends TileDecorator
{
    /**
     * @return int
     */
    public function getWealthFactor()
    {
        return $this->tile->getWealthFactor() + 2;
    }

}