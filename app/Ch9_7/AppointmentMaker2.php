<?php

namespace App\Ch9_7;

use App\Ch9_3\ApptEncoder;

class AppointmentMaker2
{
    /**
     * @var \App\Ch9_4\ApptEncoder
     */
    private $encoder;

    public function __construct(ApptEncoder $encoder)
    {
        $this->encoder = $encoder;
    }

    public function makeAppointment()
    {
        return $this->encoder->encode();
    }

}