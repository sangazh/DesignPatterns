<?php

namespace App\Ch9_4\Mega;
use App\Ch9_4\CommsManager;

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

    public function getTtdEncoder()
    {
        return new MegaTtdEncoder();
    }

    public function getContactEncoder()
    {
        return new MegaContactEncoder();
    }
}