<?php

namespace App\Ch9_3;

class MegaCommsManager extends CommsManager
{

    public function getHeaderText()
    {
        return "MegaCal header\n";
    }

    public function getApptEncoder()
    {
        return new MegaApptEncoder();
    }

    public function getFooterText()
    {
        return "MegaCal footer\n";
    }
}