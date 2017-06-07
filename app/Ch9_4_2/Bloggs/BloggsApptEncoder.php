<?php

namespace App\Ch9_4_2\Bloggs;

use App\Ch9_4_2\Encoder;

class BloggsApptEncoder implements Encoder
{

    /**
     * @return string
     */
    public function encode()
    {
        return "Appointment data encoded in BloggsCal format\n";
    }
}