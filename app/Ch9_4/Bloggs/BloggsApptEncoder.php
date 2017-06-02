<?php

namespace App\Ch9_4\Bloggs;

use App\Ch9_4\ApptEncoder;

class BloggsApptEncoder extends ApptEncoder
{

    /**
     * @return string
     */
    public function encode()
    {
        return "Appointment data encoded in BloogsCal format\n";
    }
}