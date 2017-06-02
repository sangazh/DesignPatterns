<?php

namespace App\Ch9_1;

class Minion extends Employee
{

    public function fire()
    {
        printf("%s: I'll clear my desk\n", $this->name);
    }
}