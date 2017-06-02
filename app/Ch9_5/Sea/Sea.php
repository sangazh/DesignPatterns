<?php

namespace App\Ch9_5\Sea;

class Sea
{
    private $navigability;

    /**
     * Sea constructor.
     */
    public function __construct($navigability)
    {
        $this->navigability = $navigability;
    }
}