<?php

namespace App\Ch9_4\Bloggs;

use App\Ch9_4\CommsManager;

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

    public function getTtdEncoder()
    {
        return new BloggsTtdEncoder();
    }

    public function getContactEncoder()
    {
        return new BloggsContactEncoder();
    }
}