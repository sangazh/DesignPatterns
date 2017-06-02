<?php

namespace App\Ch9_4\Mega;

use App\Ch9_4\ApptEncoder;

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