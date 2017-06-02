<?php

namespace App\Ch9_4_2\Bloggs;

use App\Ch9_4_2\CommsManager;

class BloggsCommsManager extends CommsManager
{

    public function getHeaderText()
    {
        return "BloggsCal header\n";
    }


    public function getFooterText()
    {
        return "BloggsCal footer\n";
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
                return new BloggsApptEncoder();
            case self::CONTACT:
                return new BloggsContactEncoder();
            case self::TTD:
                return new BloggsTtdEncoder();
        }
    }
}