<?php

namespace App\Ch10_1_2;

abstract class Unit
{
    public function getComposite()
    {
        return null;
    }

    /**
     * @return int
     */
    abstract public function bombardStrength();
}