<?php

namespace App\Ch9_3;

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