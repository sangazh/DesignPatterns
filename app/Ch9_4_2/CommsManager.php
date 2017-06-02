<?php

namespace App\Ch9_4_2;

abstract class CommsManager
{
    const APPT    = 1;
    const TTD     = 2;
    const CONTACT = 3;

    abstract public function getHeaderText();

    /**
     * @param int $flat_int
     *
     * @return mixed
     */
    abstract public function make($flat_int);

    abstract public function getFooterText();
}