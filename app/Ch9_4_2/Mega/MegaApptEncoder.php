<?php

namespace App\Ch9_4_2\Mega;

use App\Ch9_4_2\Encoder;

class MegaApptEncoder implements Encoder
{

    /**
     * @return string
     */
    public function encode()
    {
        return "Appointment data encoded in MegaCal format\n";
    }
}