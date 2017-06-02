<?php

namespace App\Ch9_3;

class BloggsCommsManager extends CommsManager
{

    public function getHeaderText()
    {
        return "BloggsCal header\n";
    }

    public function getApptEncoder()
    {
        return new BloggsApptEncoder();
    }

    public function getFooterText()
    {
        return "BloggsCal footer\n";
    }
}