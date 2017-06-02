<?php

namespace App\Ch9_3;

class MegaApptEncoder extends ApptEncoder
{

    /**
     * @return string
     */
    public function encode()
    {
        return "Appointment data encoded in MegaCal format\n";
    }
}