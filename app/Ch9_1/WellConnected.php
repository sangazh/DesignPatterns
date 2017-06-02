<?php

namespace App\Ch9_1;

class WellConnected extends Employee
{

    public function fire()
    {
        printf("%s: I'll call my dad\n", $this->name);
    }
}