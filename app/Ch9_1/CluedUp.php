<?php

namespace App\Ch9_1;

class CluedUp extends Employee
{

    public function fire()
    {
        printf("%s: I'll call my lawyer\n", $this->name);
    }
}