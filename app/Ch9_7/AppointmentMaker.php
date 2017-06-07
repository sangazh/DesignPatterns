<?php

namespace App\Ch9_7;

use App\Ch9_4\Bloggs\BloggsApptEncoder;

class AppointmentMaker
{
    public function makeAppointment()
    {
        $encoder = new BloggsApptEncoder();
        return $encoder->encode();
    }

}