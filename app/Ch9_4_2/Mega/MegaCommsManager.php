<?php

namespace App\Ch9_4_2\Mega;
use App\Ch9_4_2\CommsManager;

class MegaCommsManager extends CommsManager
{

    public function getHeaderText()
    {
        return "MegaCal header\n";
    }

    public function getFooterText()
    {
        return "MegaCal footer\n";
    }

    /**
     * @param int $flat_int
     *
     * @return mixed
     */
    public function make($flat_int)
    {
        switch ($flat_int) {
            case self::APPT:
                return new MegaApptEncoder();
            case self::CONTACT:
                return new MegaContactEncoder();
            case self::TTD:
                return new MegaTtdEncoder();
        }
    }

}