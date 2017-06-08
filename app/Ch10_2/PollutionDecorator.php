<?php

namespace App\Ch10_2;

class PollutionDecorator extends TileDecorator
{
    /**
     * @return int
     */
    public function getWealthFactor()
    {
        return $this->tile->getWealthFactor() - 4;
    }

}